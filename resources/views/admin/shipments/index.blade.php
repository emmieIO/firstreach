<x-admin-layout>
    <div class="col">
        <section class="card">
            <header class="card-header">
{{-- {{ $shipments }} --}}
                <h2 class="card-title">Shipments</h2>
                <a class="btn btn-success my-2" href="{{ route('shipments.create') }}"> Add New Shipment</a>
            </header>
            <div class="card-body">
                <div class="table-responsive">
                    <table style="white-space:nowrap"
                        class="table  table-responsive-lg table-bordered table-striped table-sm mb-0">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Tracking Number</th>
                                <th class="text-left">Sender Name</th>
                                <th class="text-left">Sender Phone</th>
                                <th class="text-left">Sender Email</th>
                                <th class="text-left">Sender Address</th>
                                <th class="text-left">Receiver Name</th>
                                <th class="text-left">Receiver Phone</th>
                                <th class="text-left">Receiver Email</th>
                                <th class="text-left">Receiver Address</th>
                                <th class="text-left">Shipment Date</th>
                                <th class="text-left">Expected Delivery</th>
                                <th class="text-left">Status</th>
                                <th class="text-left">Category</th>
                                <th class="text-left">Origin Port</th>
                                <th class="text-left">Destination Port</th>
                                <th class="text-left">Created by</th>
                                <th class="text-left">Edit</th>
                                <th class="text-left">Shipment Logs</th>
                                <th class="text-left">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($shipments))
                                @foreach ($shipments as $shipment)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $shipment->tracking_number }}</td>
                                        <td class="text-left">{{ $shipment->sender_name }}</td>
                                        <td class="text-left">{{ $shipment->sender_phone }}</td>
                                        <td class="text-left">{{ $shipment->sender_email }}</td>
                                        <td class="text-left">{{ $shipment->sender_address }}</td>
                                        <td class="text-left">{{ $shipment->receiver_name }}</td>
                                        <td class="text-left">{{ $shipment->receiver_phone }}</td>
                                        <td class="text-left">{{ $shipment->receiver_email }}</td>
                                        <td class="text-left">{{ $shipment->receiver_address }}</td>
                                        <td class="text-left">{{ $shipment->shipment_date }}</td>
                                        <td class="text-left">{{ $shipment->expected_delivery_date }}</td>
                                        <td class="text-left">{{ $shipment->status }}</td>
                                        <td class="text-left">{{ $shipment->category->name}}</td>
                                        <td class="text-left">{{ $shipment->origin->name}}</td>
                                        <td class="text-left">{{ $shipment->destination->name}}</td>
                                        <td class="text-left">{{ $shipment->user->name}}</td>
                                        <td class="text-left">
                                            <a href="{{ route("shipments.edit", $shipment->uuid) }}"
                                                class="btn btn-secondary btn-sm">Edit</a>
                                        </td>
                                        <td class="text-left">
                                            <a href="{{ route("shipment.history", $shipment->uuid) }}"
                                                class="btn btn-secondary btn-sm">View Logs</a>
                                        </td>
                                        <td class="text-left">
                                            <form action="{{ route("shipments.destroy", $shipment) }}" method="POST"
                                                onsubmit="if(!confirm('Are you sure you want to delete this item?')){ return false; } else { this.querySelector('button[type=submit]').disabled = true; }">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif

                        </tbody>
                    </table>
                    <div class="mt-10">
                        {{ $shipments->links() }}
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-admin-layout>
