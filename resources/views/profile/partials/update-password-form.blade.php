<section>
    {{-- <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password"
                class="form-control" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('New Password')" />
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full"
                autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password"
                class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form> --}}

     <div class="col">
        <section class="card">
            <header class="card-header">
                <h2 class="card-title">Update Password</h2>
                <small class="mt-1 fs-sm">
                    {{ __("Ensure your account is using a long, random password to stay secure.") }}
                </small>
            </header>
            <div class="card-body">
                <form class="form-horizontal form-bordered" method="post" action="{{ route('password.update') }}">
                    @csrf
                    @method('put')
                    <div class="form-group row pb-4">
                        <label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault">Current
                            Password:</label>
                        <div class="col-lg-6">
                            <input id="update_password_current_password" name="current_password" type="password"
                                class="form-control" autofocus autocomplete="name">
                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="fs-xs text-danger" />
                        </div>
                    </div>
                    <div class="form-group row pb-4">
                        <label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault">New Password</label>
                        <div class="col-lg-6">
                            <input class="form-control" id="update_password_password" name="password" type="password"
                                autocomplete="new-password">
                            <x-input-error :messages="$errors->updatePassword->get('password')" class="fs-xs text-danger" />
                        </div>
                    </div>

                    <div class="form-group row pb-4">
                        <label class="col-lg-3 control-label text-lg-end pt-2" for="inputRounded">Confirm new Password</label>
                        <div class="col-lg-6">
                            <input  class="form-control" id="update_password_password_confirmation"
                                name="password_confirmation" type="password"
                                autocomplete="new-password">
                            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="fs-sm text-danger" />
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <button class="btn btn-primary" type="submit">{{ __('Save') }}</button>

                        @if (session('status') === 'password-updated')
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
