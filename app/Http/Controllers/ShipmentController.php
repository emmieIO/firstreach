<?php

namespace App\Http\Controllers;

use App\Data\ShipmentData;
use App\Enums\StatusEnum;
use App\Events\ShipmentCreated;
use App\Http\Requests\CreateShipmentRequest;
use Illuminate\Http\Request;
use App\Models\Shipment;
use App\Models\Location;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ShipmentController extends Controller
{

    public function index()
    {
        $shipments = Shipment::with(['destination', 'origin', 'category', 'user'])->paginate(20);
        return view('admin.shipments.index', compact('shipments'));
    }

    public function create()
    {
        $locations = Location::all();
        $status = StatusEnum::getStatuses();
        $categories = Category::all();
        return view(
            'admin.shipments.create',
            compact(
                'locations',
                'status',
                'categories'
            )
        );
    }

    public function store(CreateShipmentRequest $request)
    {
        $validatedData = ShipmentData::fromRequest($request);
        try {
            DB::Transaction(function() use ($validatedData) {
                $shipment = auth()->user()->shipments()->create(
                    array_merge(
                        ["tracking_number" => "FSTRL-" . Str::upper(Str::random(8))],
                        $validatedData->toArray()
                    )
                );

                $shipment->shipmentHistories()->create([
                    "shipment_id" => $shipment->id,
                    "remarks" => "Shipment $shipment->tracking_number processed",
                    "location_id" => $shipment->origin_id,
                    "status" => $shipment->status,
                    "created_by" => auth()->user()->id
                ]);
                event(new ShipmentCreated($shipment));
            });
            return redirect()->route("shipments.index")->with("success", "Shipment Creation Success");
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->with("error", "Shipment creation failed. Please try again.");
        }
    }


    public function edit(string $uuid)
    {
        $status = StatusEnum::getStatuses();
        $locations = Location::all();
        $categories = Category::all();
        $shipment = Shipment::where("uuid", $uuid)->with([
            "category",
            'origin',
            'destination'
        ])->first();
        return view("admin.shipments.edit", compact("status", "shipment", 'locations', 'categories'));
    }

    public function update(CreateShipmentRequest $request, string $uuid)
    {

        $shipment = Shipment::where('uuid', $uuid)->first();
        $validatedData = ShipmentData::fromRequest($request);
        DB::beginTransaction();
        try {
            $shipment->update($validatedData->toArray());
            DB::commit();
            return redirect()->route("shipments.index")->with("success", "Shipment Update Success");
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with("error", "Shipment update failed. Please try again.");
        }

    }

    public function destroy(string $uuid)
    {
        $shipment = Shipment::where('id', $uuid)->first();
        if (!$shipment) {
            return redirect()->route("shipments.index")->with("error", "Shipment not found.");
        }

        try {
            $shipment->delete();
            return redirect()->route("shipments.index")->with("success", "Shipment deleted successfully.");
        } catch (\Exception $e) {
            return back()->with("error", "Shipment deletion failed. Please try again.");
        }
    }


}
