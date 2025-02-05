<x-admin-layout>

    <div class="col">
        <section class="card">
            <header class="card-header">

                <h2 class="card-title">Categories</h2>
            </header>
            <div class="card-body">
                <div class="table-responsive">
                    <table style="white-space:wrap"
                        class="table  table-responsive-lg table-bordered table-striped table-sm mb-0">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>uuid</th>
                                <th class="text-end">Name</th>
                                <th class="text-end">Email</th>
                                <th class="text-end">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($users->toArray()))
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->uuid }}</td>
                                        <td class="text-end">{{ $user->name }}</td>
                                        <td class="text-end">{{ $user->email }}</td>
                                        <td class="text-end">
                                            <form action="{{ route("admin.users.delete", $user->uuid) }}" method="POST"
                                                onsubmit="if(!confirm('Are you sure you want to delete this user?')){ return false; } else { this.querySelector('button[type=submit]').disabled = true; }">
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
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-admin-layout>
