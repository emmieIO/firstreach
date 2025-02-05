@component('mail::message')
# Dear {{ $shipment->receiver_name }},

Your shipment has been processed and is now on its way!

**Tracking Number:** {{ $shipment->tracking_number }}

**Origin:** {{ $shipment->origin->name }}

**Destination:** {{ $shipment->destination->name }}

**Expected Delivery:** {{ $shipment->expected_delivery }}

Kindly copy your tracking code and click the button below to track your shipment:

@component('mail::button', ['url' => $tracking_url])
Track Shipment
@endcomponent

Thank you for choosing our service!

Regards,
{{ config('app.name') }}
@endcomponent
