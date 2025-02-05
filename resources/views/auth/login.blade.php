<x-admin-auth-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('admin.post.login') }}">
        @csrf

        <!-- Email Address -->
        {{-- <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div> --}}

        <!-- Password -->
        {{-- <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div> --}}

        <!-- Remember Me -->
        {{-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div> --}}



            <div class="container">
                <div class="grid grid-cols-12 justify-center items-center authentication authentication-basic h-full">
                    <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-3 md:col-span-3 sm:col-span-2 col-span-12"></div>
                    <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-8 col-span-12">
                        <div class="box my-4">
                            <div class="box-body p-[3rem]">
                                <p class="h5 mb-2 text-center">Administrator Login</p>
                                <p class="mb-4 text-textmuted dark:text-textmuted/50 opacity-70 font-normal text-center">Welcome
                                    back</p>
                                <div class="grid grid-cols-12 gap-y-3">
                                    <div class="xl:col-span-12 col-span-12"> <label for="signin-username"
                                            class="form-label text-defaulttextcolor">Email
                                            <sup class="text-xs text-danger">*</sup>
                                        </label>
                                        <input type="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        class="form-control"
                                        id="signin-username"
                                        placeholder="Email">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <div class="xl:col-span-12 col-span-12 mb-2"> <label for="signin-password"
                                        class="form-label text-defaulttextcolor block">
                                        Password<sup class="text-xs text-danger">*</sup>
                                        </label>
                                        <div class="relative">
                                            <input type="password" name="password" class="form-control create-password-input" id="signin-password"
                                            placeholder="Password">
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                        <div class="mt-2">
                                            <div class="form-check">
                                                <input
                                                class="form-check-input"
                                                type="checkbox" value=""
                                                name="remember"
                                                id="remember_me">
                                                <label
                                                    class="form-check-label text-textmuted dark:text-textmuted/50 font-normal"
                                                    for="remember_me"> Remember password ?
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid mt-4 w-full">
                                    <button type="submit" class="ti-btn ti-btn-primary">Access Dashboard</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-3 md:col-span-3 sm:col-span-2 col-span-12"></div>
                </div>
            </div>
    </form>
</x-admin-auth-layout>
