<section>
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>
    <div class="col">
        <section class="card">
            <header class="card-header">
                <h2 class="card-title">Profile Information?</h2>
                <small class="mt-1 fs-sm">
                    {{ __("Update your account's profile information and email address.") }}
                </small>
            </header>
            <div class="card-body">
                <form class="form-horizontal form-bordered" method="post" action="{{ route('profile.update') }}">
                    @csrf
                    @method('patch')
                    <div class="form-group row pb-4">
                        <label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault">Name:</label>
                        <div class="col-lg-6">
                            <input type="text" name="name" class="form-control " id="inputDefault"
                                value="{{ old('name', auth()->user()->name)}}" autofocus autocomplete="name">
                            @error('name')
                                <small class="fs-sm text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row pb-4">
                        <label class="col-lg-3 control-label text-lg-end pt-2" for="inputRounded">Email</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="inputRounded" name="email"
                                value="{{ old('email', auth()->user()->email) }}">
                            @error('email')
                                <small class="fs-sm text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <button class="btn btn-primary" type="submit">{{ __('Save') }}</button>

                        @if (session('status') === 'profile-updated')
                            <p x-data="{ show: true }" x-show="show" x-transition
                                x-init="setTimeout(() => show = false, 2000)" class="fs-md text-gray-600">
                                {{ __('Saved.') }}</p>
                        @endif
                    </div>
                </form>
            </div>
        </section>
    </div>
</section>
