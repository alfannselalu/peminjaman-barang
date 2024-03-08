<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="mb-5 pb-5 text-center">
        <h5 class="text-primary" style="color: blue; position: relative;">Welcome!</h5>
        <p class="d-inline-block fs-6 text-muted">Sign in to continue to Apps.</p>
    </div>
    <hr style="background-color: black; height: 3px;">

    <form method="POST" class="mt-4 w-full max-w-md mx-auto" action="{{ route('login') }}">
        @csrf

        <!-- Email Or Username -->
        <div>
            <x-input-label for="input_type" :value="__('Email/Username')" />
            <x-text-input id="input_type" class="block mt-1 w-full" type="text" name="input_type" :value="old('input_type')" autofocus autocomplete="input_type" />

            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" required/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <x-primary-button class="mt-3">
            {{ __('Log in') }}
        </x-primary-button>

        <div class="pt-5" style="text-align: center; padding-top:1rem;">
            <p>Ayo Daftarr? <a href="register" class="fw-medium" style="color: blue; font-size:15px;"> Daftar Sekarang </a></p>
        </div>

    </form>
</x-guest-layout>
