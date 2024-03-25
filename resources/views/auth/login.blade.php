<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
        </x-slot>

        <div class="my-10">
            <h3 class="font-bold text-5xl">Welcome Back!</h3>
            <p class="text-md">
                The world of investing is already waiting.
            </p>
        </div>
        
        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="my-4">
                <x-button class="w-full py-4">
                    {{ __('Log in') }}
                </x-button>
            </div>

            <div class="w-full grid">
                @if (Route::has('register'))
                    <a class="w-full mx-auto h-full text-md text-btntext-300 hover:text-btntext-400 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 border-2 border-btn-100 hover:bg-btn-300 transition-all py-4 text-center" href="{{ route('register') }}">
                        {{ __('Don\'t have an account? ') }}
                    </a>
                @endif
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>