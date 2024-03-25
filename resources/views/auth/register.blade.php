<x-guest-layout>

    <script>
        $(document).ready(() => {
            $.getJSON('/resources/3/countries.json', list => {
                $('#country').html('')

                list.map(country => {
                    $('#country').append(`
                        <option value="${country.name}">
                            ${country.name}
                        </option>
                    `)
                })
            })
            .done(() => {
                console.log("JSON request completed successfully.");
            })
            .fail((jqxhr, textStatus, error) => {
                console.log("JSON request failed: " + error);
            });
        });
    </script>
    
    <x-authentication-card>
        <x-slot name="logo">
        </x-slot>

        <div class="my-10">
            <h3 class="font-bold text-3xl">Create an account!</h3>
            <p class="text-md">
                The world of investing is already waiting.
            </p>
        </div>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="username" value="{{ __('Username') }}" />
                <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="phone_number" value="{{ __('Phone Number') }}" />
                <x-input id="phone_number" class="block mt-1 w-full" type="tel" name="phone_number" :value="old('phone_number')" required autocomplete="phone_number" />
            </div>

            <div class="mt-4">
                <x-label for="country" value="{{ __('Country') }}" />
                <select id="country" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm py-4 mb-3 block mt-1 w-full" type="country" name="country" :value="old('country')" required autocomplete="country">
                    
                </select>
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <x-input id="referred_by" class="block mt-1 w-full" type="hidden" name="referred_by" value="{{ $request -> input('ref') ? $request -> input('ref') : 'admin'  }}" required autocomplete="new-referred_by" />

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="my-4">
                <x-button class="w-full">
                    {{ __('Register') }}
                </x-button>
            </div>

            <div class="w-full grid">
                @if (Route::has('login'))
                    <a class="w-full mx-auto h-full text-md text-gray-800 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 border-2 border-emerald-500 hover:bg-emerald-100 transition-all py-4 text-center" href="{{ route('login') }}">
                        {{ __('Already have an account? ') }}
                    </a>
                @endif
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
