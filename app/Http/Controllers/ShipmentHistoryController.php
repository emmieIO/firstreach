<?php

namespace App\Http\Controllers;

use App\Enums\StatusEnum;
use App\Models\Shipment;
use Illuminate\Http\Request;
use App\Models\Location;
use Illuminate\Validation\Rule;
use App\Models\ShipmentHistory;

class ShipmentHistoryController extends Controller
{

    public function index()
    {
        return view('shipment-histories.index');
    }

    public function logs(string $uuid)
    {
        $shipment = Shipment::where("uuid", $uuid)->with('shipmentHistories')->first();

        if (!$shipment) {
            return redirect()->route('shipments.index')->with('error', 'Shipment not found');
        }
        $history_logs = $shipment->shipmentHistories;

        return view("shipment-histories.shipment-logs", compact('shipment', 'history_logs'));
    }

    public function create(string $uuid)
    {
        $shipment = Shipment::where("uuid", $uuid)->first();
        $locations = Location::all();
        $status = StatusEnum::getStatuses();

        if (!$shipment) {
            return redirect()->route('shipments.index')->with('error', 'Shipment not found');
        }
    return view('shipment-histories.create-log', compact('shipment','locations', 'status'));
    }


    public function store(Request $request, $uuid){
        $request->validate([
            "current_location" => "required|exists:locations,id",
            'status' => ["required", Rule::enum(StatusEnum::class)],
            'remark' => ["required", "string"],
        ]);

        $shipment = Shipment::where('uuid', $uuid)->first();
        if (!$shipment) {
            return redirect()->route('shipments.index')->with('error', 'Shipment not found');
        }

        $shipment->shipmentHistories()->create([
            'location_id'=> $request->input('current_location'),
            'status' => $request->input('status'),
            'remarks' => $request->input('remark'),
            'created_by' => auth()->user()->id
        ]);


    return redirect()->route('shipment.history', $uuid)->with('success', 'Shipment history log created successfully');
    }

    public function edit ($uuid, $historyId){
        $shipment = Shipment::where("uuid", $uuid)->first();
        $locations = Location::all();
        $log = ShipmentHistory::where('uuid', $historyId)->first();
        $status = StatusEnum::getStatuses();


        return view("shipment-histories.edit-log", compact("log", "shipment", "locations", "status"));
    }

    public function update(Request $request, $uuid, $historyId){
        $request->validate([
            "current_location" => "required|exists:locations,id",
            'status' => ["required", Rule::enum(StatusEnum::class)],
            'remark' => ["required", "string"],
        ]);

        $log = ShipmentHistory::where('uuid', $historyId)->first();
        if (!$log) {
            return redirect()->route('shipment.history', $uuid)->with('error', 'log not found');
        }

        $log->update([
            'location_id' => $request->input('current_location'),
            'status' => $request->input('status'),
            'remarks' => $request->input('remark'),
            'created_by' => auth()->user()->id
        ]);


        return redirect()->route('shipment.history', $uuid)->with('success', 'Shipment history log updated successfully');
    }

    public function destroy($uuid, $historyId)
    {
        $log = ShipmentHistory::where('uuid', $historyId)->first();
        if (!$log) {
            return redirect()->route('shipment.history', $uuid)->with('error', 'Log not found');
        }

        $log->delete();

        return redirect()->route('shipment.history', $uuid)->with('success', 'Shipment history log deleted successfully');
    }




}
