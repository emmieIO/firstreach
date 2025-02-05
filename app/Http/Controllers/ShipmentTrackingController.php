<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipment;

class ShipmentTrackingController extends Controller
{
    public function index()
    {

        return view('shipment-tracking.index');
    }

    public function track(Request $request)
    {
        $request->validate(['tracking_number'=>"required|string"]);
        $trackingNumber = $request->input('tracking_number');
        // check if the tracking number is valid
        $shipment = Shipment::with(["shipmentHistories", "origin", "destination"])->where('tracking_number', $trackingNumber)->first();

        // if invalid, return an error message to the user
        if (!$shipment) {
            return back()->with('tracking-error', 'Invalid tracking number');
        }
        return view('shipment-tracking.index', compact('shipment'));
    }
}
