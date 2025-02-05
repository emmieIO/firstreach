@php
use Carbon\Carbon;
@endphp

<x-guest-layout>

    <!-- Start main-content -->
    <section class="page-title"
        style="background-image: url({{ asset("dist/front/images/background/page-title.jpg") }});">
        <div class="auto-container">
            <div class="title-outer text-center">
                <h1 class="h6 fs-1 text-light">Track Shipment</h1>
                <ul class="page-breadcrumb d-flex justify-content-center my-3">
                    <form class="w-50 md:w-100" method="post" action="{{ route('get.shipment.tracking') }}">
                        @csrf
                        <div class="">
                            <input type="text" class="form-control" name="tracking_number"
                                placeholder="Enter Tracking Code">
                            @error('tracking_number')
                                <div class=" text-left text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            @if (session('tracking-error'))
                                <div class=" text-left text-danger">
                                    {{ session('tracking-error') }}
                                </div>
                            @endif
                            <button class="btn btn-lg w-50 my-3 btn-danger d-block mx-auto" type="submit">Track</button>
                        </div>
                    </form>

                </ul>
            </div>
        </div>
    </section>

    @isset($shipment)
        <div class="">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="tracking-card">

                        <div class="shipment-details row justify-content-center w-90 gap-2">
                            <div class="card p-3 my-3 col-lg-5 col-md-11 text-dark">
                                <h3>SHIPMENT DETAILS</h3>
                                <p><strong>Tracking Number:</strong> {{ $shipment->tracking_number }}</p>
                                <p><strong>Shipment Date:</strong>
                                    {{ Carbon::parse($shipment->shipment_date)->format('M d Y g:ia') }}</p>
                                <p><strong>Estimated Delivery:</strong>
                                    {{ Carbon::parse($shipment->expected_delivery_date)->format('M d Y g:ia') }}</p>
                                <p><strong>Sender:</strong> {{ $shipment->sender_name }}</p>
                                <p><strong>Sender Phone Number:</strong> {{ $shipment->sender_phone }}</p>
                                <p><strong>Sender Address:</strong> {{ $shipment->sender_address }}</p>
                                <p><strong>Receiver:</strong> {{ $shipment->receiver_name }}</p>
                                <p><strong>Receiver Phone Number:</strong> {{ $shipment->receiver_phone }}</p>
                                <p><strong>Receiver Email:</strong> {{ $shipment->receiver_email }}</p>
                                <p><strong>Receiver Address:</strong> {{ $shipment->receiver_address }}</p>

                                <p><strong>Origin Port:</strong>{{ $shipment->origin->name }}</p>
                                <p><strong>Destination Port:</strong>{{ $shipment->destination->name }}</p>
                                <p><strong>Status:</strong> {{ $shipment->status }}</p>
                                <p><strong>Description:</strong> {{ $shipment->description }}</p>
                            </div>

                            <div class="card p-3 my-3 col-lg-5 col-md-11">
                                <h3>SHIPMENT LOG</h3>
                                <ul class="history-list">
                                    @foreach ($shipment->shipmentHistories as $history)
                                        <li><strong>{{ Carbon::parse($history->created_at)->format("F d") }}:
                                            </strong>{{ $history->remarks }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endisset

    <!-- end main-content -->
</x-guest-layout>
