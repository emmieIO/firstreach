<x-admin-layout>

    <div class="">
        <div class="col-md-6 col-12">
            <section class="card">
                <header class="card-header">

                    <h2 class="card-title">Edit Category</h2>
                </header>
                <div class="card-body">
                    <form class=" form-bordered" action="{{ route("categories.update", $category->uuid) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group pb-4">
                            <label class="col-lg-3 control-label pt-2 mb-2" for="category">Category Name</label>
                            <div class="col-lg-12">
                                <input type="text" name="category_name" value="{{ old('category_name', $category->name) }}" placeholder="Category Name" class="form-control"
                                    id="category">
                            </div>
                            @error('category_name')
                            <h6 class="text-danger text-xs">{{ $message }}</h6>
                            @enderror
                        </div>
                        <button class="btn btn-primary">Edit Category</button>
                    </form>
                </div>
            </section>
        </div>
    </div>

</x-admin-layout>
