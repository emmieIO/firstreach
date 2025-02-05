<x-admin-layout>

    <section>
        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>
        <div class="col">
            <section class="card">
                <header class="card-header">
                    <h2 class="card-title">Add New User</h2>
                    <small class="mt-1 fs-sm">
                        {{ __("add new user") }}
                    </small>
                </header>
                <div class="card-body">
                    <form class="form-horizontal form-bordered" method="post" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row pb-4">
                            <label class="col-lg-3 control-label text-lg-end pt-2" for="name">Name:</label>
                            <div class="col-lg-6">
                                <input type="text" name="name" class="form-control " id="name"
                                autofocus autocomplete="name">
                                @error('name')
                                    <small class="fs-sm text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row pb-4">
                            <label class="col-lg-3 control-label text-lg-end pt-2" for="email">Email</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="email" name="email">
                                @error('email')
                                    <small class="fs-sm text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row pb-4">
                            <label class="col-lg-3 control-label text-lg-end pt-2" for="password">New
                                Password</label>
                            <div class="col-lg-6">
                                <input class="form-control" id="password" name="password"
                                    type="password" autocomplete="new-password">
                                @error('password')
                                    <small class="fs-sm text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row pb-4">
                            <label class="col-lg-3 control-label text-lg-end pt-2" for="password_confirmation">Email</label>
                            <div class="col-lg-6">
                                <input class="form-control" id="password_confirmation"
                                    name="password_confirmation" type="password" autocomplete="new-password">
                                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')"
                                    class="fs-sm text-danger" />
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <button class="btn btn-success" type="submit">{{ __('Save') }}</button>

                            @if (session('status') === 'profile-updated')
                                <p x-data="{ show: true }" x-show="show" x-transition
                                    x-init="setTimeout(() => show = false, 2000)" class="fs-md text-gray-600">
                                    {{ __('Saved.') }}
                                </p>
                            @endif
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </section>

</x-admin-layout>
