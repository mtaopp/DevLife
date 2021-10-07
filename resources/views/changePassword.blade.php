<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="entryTitle container">
        <main role="main" class="entryTitle">
            <section class="d-flex">
                <div class="userInformation w-100 justify-content-center">
                    <form method="POST" action= "{{ route('storePassword') }}">
                        @csrf
                        <div class="col">
                            <!-- Old Password -->
                            <div class="row mt-5">
                                <div class="col-4">
                                    <x-label class="text-nowrap" for="current_password" :value="__('Current Password')" />
                                </div>

                                <div class="col-8">
                                    <x-input id="current_password" class="ml-2"
                                                    type="password"
                                                    name="current_password"
                                                    required autocomplete="current_password" />
                                </div>
                            </div>
                            <!-- Password -->
                            <div class="row mt-5">
                                <div class="col-4">
                                    <x-label for="password" :value="__('Password')" />
                                </div>
                                <div class="col-8">
                                    <x-input id="password" class="ml-2"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="new-password" />
                                </div>
                            </div>
                            <!-- Confirm Password -->
                            <div class="row mt-5">
                                <div class="col-4">
                                    <x-label class="text-nowrap" for="password_confirmation" :value="__('Confirm Password')" />
                                </div>

                                <div class="col-8">
                                    <x-input id="password_confirmation" class="ml-2"
                                                    type="password"
                                                    name="password_confirmation" required />
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="w-100 text-center d-flex justify-content-center">
                            <button class="d-flex justify-content-center mb-4"> <i class="m-1 fas fa-user-secret text-justify"></i><h6 class="text-justify  m-1 ">Change Password</h6></button>
                        </div>

                    </form>
                </div>
            </section>
        </main><!-- /.entryTitle -->
    </div>

</x-app-layout>


