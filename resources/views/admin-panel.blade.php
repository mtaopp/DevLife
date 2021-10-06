<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="entryTitle container">
        <main role="main" class="entryTitle w-100">
            <section class="text-left w-100">
                <div class="w-100">
                    <h1>Admin Control-Panel</h1>
                </div>
            </section>
            <section class="text-left w-100">
                <div class="w-100 mt-5">
                    <h2>Users:</h2>
                    <table class="w-100">
                        <tr class="w-100 text-center">
                            <th class=" mx-3 justify-content-between flex-grow-1">User-Id:</th>
                            <th class=" mx-3 justify-content-between flex-grow-1">Username:</th>
                            <th class=" mx-3 justify-content-between flex-grow-1">First Name:</th>
                            <th class=" mx-3 justify-content-between flex-grow-1">Lastname:</th>
                            <th class=" mx-3 justify-content-between flex-grow-1">E-Mail:</th>
                            <th class=" mx-3 justify-content-between flex-grow-1">Role:</th>
                        </tr>
                        @foreach ($users as $user)
                        <tr class="w-100 text-center">
                            <th class=" mx-3 justify-content-between flex-grow-1">{{ $user->id }}</th>
                            <th class=" mx-3 justify-content-between flex-grow-1">{{ $user->username }}</th>
                            <th class=" mx-3 justify-content-between flex-grow-1">{{ $user->firstname }}</th>
                            <th class=" mx-3 justify-content-between flex-grow-1">{{ $user->lastname }}</th>
                            <th class=" mx-3 justify-content-between flex-grow-1">{{ $user->email }}</th>
                            <th class=" mx-3 justify-content-between flex-grow-1">{{ $roles}}</th>
                        </tr>

                        @endforeach
                    </table>
                </div>
            </section>
            <section class="text-left w-100">
                <div class="w-100 mt-5">
                    <h2>Articles:</h2>
                    <table class="w-100">
                        <tr class="w-100 d-flex text-center">
                            <th class=" mx-3 justify-content-between flex-grow-1">Article-Id:</th>
                            <th class=" mx-3 justify-content-between flex-grow-1">Category:</th>
                            <th class=" mx-3 justify-content-between flex-grow-1">Author:</th>
                            <th class=" mx-3 justify-content-between flex-grow-1">Image:</th>
                            <th class=" mx-3 justify-content-between flex-grow-1">Description:</th>
                            <th class=" mx-3 justify-content-between flex-grow-1">Content:</th>
                        </tr>
                    </table>
                </div>
            </section>
        </main><!-- /.entryTitle -->
    </div>

</x-app-layout>
