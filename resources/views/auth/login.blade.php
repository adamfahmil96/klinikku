<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="font-bold text-black-700" />
            <x-text-input id="email" class="block mt-1 w-full !bg-white !text-gray-900 !border-gray-300 focus:!border-green-500 focus:!ring-green-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="font-bold text-black-700" />

            <x-text-input id="password" class="block mt-1 w-full !bg-white !text-gray-900 !border-gray-300 focus:!border-green-500 focus:!ring-green-500"
                type="password"
                name="password"
                required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-green-600 shadow-sm focus:ring-green-500" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-green-700 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif

            <x-primary-button class="ms-3 !bg-green-600 hover:!bg-green-700 focus:!bg-green-700 active:!bg-green-800">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>