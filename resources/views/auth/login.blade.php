<x-guest-layout>
    <x-auth-card>
        <div id="" class="container">
            <x-slot name="logo">
                <a href="/">
                    <x-application-logo class="" />
                </a>
            </x-slot>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <div class="entry-login" >
                <form class="login-input" method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Email Address -->
                    <div class="EP">
                        <div class="E">
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus /><br>
                            <x-label for="email" :value="__('Email')" />
                        </div>
                        <!-- Password -->
                        <div class="P">
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" /><br>
                            <x-label for="password" :value="__('Password')" />
                        </div>
                        <!-- Remember Me -->
                        <div class="RM block">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>
                        <div class="L">
                            @if (Route::has('password.request'))
                            {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a> --}}
                            @endif
                            <x-button class="ml-3">
                                {{ __('Log in') }}
                            </x-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </x-auth-card>
</x-guest-layout>
