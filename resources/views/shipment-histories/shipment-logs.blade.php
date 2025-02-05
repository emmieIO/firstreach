<x-admin-layout>

<div class="col">
    <section class="card">
        <header class="card-header">

            <h2 class="card-title">{{ $shipment->tracking_number }} Logs</h2>
            <div>
                <a href="{{ route("create.shipment.history", $shipment->uuid) }}" class="btn btn-success my-1">Add Log</a>
            </div>
        </header>
        <div class="card-body">
            <div class="table-responsive">
                <table style="white-space:wrap"
                    class="table  table-responsive-lg table-bordered table-striped table-sm mb-0">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th class="text-end">Location</th>
                            <th class="text-end">status</th>
                            <th class="text-end">Remark</th>
                            <th class="text-end">Edit</th>
                            <th class="text-end">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($history_logs))
                            @foreach ($history_logs as $history)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="text-end">{{ $history->location->name }}</td>
                                    <td class="text-end">{{ $history->status }}</td>
                                    <td class="text-end">{{ $history->remarks }}</td>
                                    <td class="text-end">
                                        <a href="{{ route("shipment.history.edit", [$shipment->uuid, $history->uuid]) }}"
                                            class="btn btn-secondary btn-sm">Edit</a>
                                    </td>
                                    <td class="text-end">
                                        <form action="{{ route("shipment.history.delete",[$shipment->uuid, $history->uuid] ) }}" method="POST"
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
                    {{-- {{ $history_logs->links() }} --}}
                </div>
            </div>
        </div>
    </section>
</div>
</x-admin-layout>
