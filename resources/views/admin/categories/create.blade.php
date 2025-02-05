<x-admin-layout>

    <div class="">
        <div class="col-md-6 col-12">
            <section class="card">
                <header class="card-header">

                    <h2 class="card-title">Create Category</h2>
                </header>
                <div class="card-body">
                    <form class="form-bordered" action="{{ route("categories.store") }}" method="post">
                        @csrf
                        <div class="form-group  pb-4">
                            <label class="col-lg-3 control-label pt-2 mb-2" for="inputDefault">Category Name</label>
                            <div class="col-lg-12">
                                <input type="text" name="category_name" placeholder="Category Name" class="form-control" id="category">

                            </div>
                            @error('category_name')
                                <h6 class="text-xs text-danger">{{ $message }}</h6>
                            @enderror

                        </div>
                        <button class="btn btn-primary">Create</button>




                    </form>
                </div>
            </section>
        </div>
    </div>

</x-admin-layout>
