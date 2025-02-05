@php
    use Carbon\Carbon;
@endphp
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipment Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            background: #007bff;
            color: white;
            padding: 10px;
            border-radius: 10px 10px 0 0;
        }
        .content {
            padding: 20px;
            text-align: left;
        }
        .footer {
            text-align: center;
            padding: 10px;
            font-size: 12px;
            color: #555;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 10px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        @media screen and (max-width: 600px) {
            .container {
                width: 100%;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Shipment Notification</h2>
        </div>
        <div class="content">
            <p>Dear {{ $shipment->receiver_name }},</p>
            <p>Your shipment has been processed and is now on its way!</p>
            <p><strong>Tracking Number:</strong> {{ $shipment->tracking_number }}</p>
            <p><strong>Origin:</strong> {{ $shipment->origin->name }}</p>
            <p><strong>Destination:</strong> {{ $shipment->destination->name }}</p>
            <p><strong>Expected Delivery:</strong> {{Carbon::parse($shipment->expected_delivery_date)->format("M d Y g:ia") }}</p>
            <p>Kindly copy your tracking code and follow the link below to track shipment progress :</p>
            <p style="text-align: center;">
                <a href="{{ route("shipment.tracking") }}" class="button">Track Shipment</a>
            </p>
            <p>Thank you for choosing our service!</p>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} FirsReach Logistics. All Rights Reserved.
        </div>
    </div>
</body>
</html>
