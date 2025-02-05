<x-admin-layout>
    <div class="col">
        <section class="card">
            <header class="card-header">
                <h2 class="card-title">Locations</h2>
            </header>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-sm mb-0">
                        <thead>
                            <tr>
                                <th class="text-center">SN</th>
                                <th class="text-center">UUID</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Slug</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($locations as $location)
                                <tr>
                                    <td class="text-left">{{ $loop->iteration }}</td>
                                    <td class="text-left">{{ $location->uuid }}</td>
                                    <td class="text-left">{{ $location->name }}</td>
                                    <td class="text-left">{{ $location->slug }}</td>
                                    <td class="text-left">
                                        <a href="{{ route('locations.edit', $location->uuid) }}"
                                            class="btn btn-secondary btn-sm">Edit</a>
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ route('locations.destroy', $location) }}" method="POST"
                                         onsubmit="if(!confirm('Are you sure you want to delete this item?')){ return false; } else { this.querySelector('button[type=submit]').disabled = true; }">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">No locations found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="mt-3">
                        {{ $locations->links() }}
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-admin-layout>
