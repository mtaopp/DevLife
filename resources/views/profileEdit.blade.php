<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="entryTitle container">
        <main role="main" class="entryTitle">
            <section class="d-flex">
                <div class="userInformation w-100 justify-content-center">
                    <form method="POST" action= "{{ route('profileUpdate') }}">
                        @csrf
                        <div class="row">

                            <div class="d-flex flex-column">
                                <label for="firstname">First Name</label>
                                <label for="lastname">Last Name</label>
                                <label for="email">Email</label>
                            </div>
                            <div class="d-flex flex-column">
                                <input type="text" name="firstname" id="firstname" value="{{ $firstname }}">
                                <input type="text" name="lastname" id="lastname" value="{{ $lastname }}">
                                <input type="text" name="email" id="email" value="{{ $email }}">
                            </div>
                        </div>


                        <br>
                        <button>Save</button>
                    </form>
                </div>
            </section>
        </main><!-- /.entryTitle -->
    </div>

</x-app-layout>

