<x-admin-layout>

    <div class="">
        <div class="col-md-6 col-12">
            <section class="card">
                <header class="card-header">

                    <h2 class="card-title">Edit Location</h2>
                </header>
                <div class="card-body">
                    <form class=" form-bordered" action="{{ route("locations.update", $location->uuid) }}"
                        method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group pb-4">
                            <label class="col-lg-3 control-label pt-2 mb-2" for="location">Location Name</label>
                            <div class="col-lg-12">
                                <input type="text"
                                    name="location_name"
                                    value="{{ old('location_name', $location->name) }}"
                                    placeholder="Location Name"
                                    class="form-control" id="location">
                            </div>
                            @error('location_name')
                                <h6 class="text-danger text-xs">{{ $message }}</h6>
                            @enderror
                        </div>
                        <button class="btn btn-primary">Edit Location</button>
                    </form>
                </div>
            </section>
        </div>
    </div>

</x-admin-layout>
