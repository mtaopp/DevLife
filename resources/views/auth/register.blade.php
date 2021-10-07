<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current" />
            </a>
        </x-slot>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <div class="entry-register">
        <form method="POST" action="{{ route('register') }}" class="register align-self-center">
            @csrf
            <!-- Name -->
        <div class="FLU">
            <div>
                <x-input id="firstname" class="block w-full" type="text" name="firstname" :value="old('firstname')" required autofocus /><br>
                <x-label class="F" for="firstname" :value="__('First Name')" />
            </div>
            <div>
                <x-input id="lastname" class="block w-full" type="text" name="lastname" :value="old('lastname')" required autofocus /><br>
                <x-label class="L" for="lastname" :value="__('Last Name')" />
            </div>
            <div>
                <x-input id="username" class="block w-full" type="text" name="username" :value="old('username')" required autofocus /><br>
                <x-label class="U" for="username" :value="__('Username')" />
            </div>
        </div>
            <!-- Email Address -->
            <div class="EPCP m-0">
                <div class="">
                    <x-input id="email" class="block w-full" type="email" name="email" :value="old('email')" required /><br>
                    <x-label class="E" for="email" :value="__('Email')" />
                </div>
                <!-- Password -->
                <div class="">
                    <x-input id="password" class="block w-full"
                    type="password"
                    name="password"
                    required autocomplete="new-password" /><br>
                    <x-label class="P" for="password" :value="__('Password')" />
                </div>
                <!-- Confirm Password -->
                <div class="">
                    <x-input id="password_confirmation" class="block w-full"
                    type="password"
                    name="password_confirmation" required /><br>
                    <x-label class="CP" for="password_confirmation" :value="__('Confirm Password')" />
                </div>
            </div>
            <div class="register-button flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                <x-button class="button ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </div>
    </x-auth-card>
</x-guest-layout>
