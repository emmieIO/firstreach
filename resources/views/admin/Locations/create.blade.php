<x-admin-layout>

    <div class="">
        <div class="col-md-6 col-12">
            <section class="card">
                <header class="card-header">

                    <h2 class="card-title">Create Location</h2>
                </header>
                <div class="card-body">
                    <form class="form-bordered" action="{{ route("locations.store") }}" method="post">
                        @csrf
                        <div class="form-group  pb-4">
                            <label class="col-lg-3 control-label pt-2 mb-2" for="inputDefault">Location Name</label>
                            <div class="col-lg-12">
                                <input type="text" name="location_name" placeholder="Location Name" class="form-control"
                                    id="category">

                            </div>
                            @error('location_name')
                                <h6 class="text-xs text-danger">{{ $message }}</h6>
                            @enderror

                        </div>
                        <button class="btn btn-primary">Create Location</button>
                    </form>
                </div>
            </section>
        </div>
    </div>

</x-admin-layout>
