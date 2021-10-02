<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="entryTitle container">
        <main role="main" class="entryTitle">
            <section class="d-flex justify-content-center">
                <div class="userInformation w-100">

                    <div class="row w-100">
                        <div class="col-md-5 ">
                            <div class="userImage row">
                                <div class="d-flex flex-column-reverse flex-wrap flex-shrink">

                                    <a href="{{ route('changePassword') }}"><h4 class="text-nowrap">Change Password</h4></a>
                                    <a href="{{ route('changeImage') }}"><h4>Change Image</h4></a>
                                    <i class="userImage far fa-user fa-9x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-7 p-2">
                            <h2 class="d-flex text-nowrap">Welcome: {{$firstname}} {{$lastname}} <a href="{{ route('profileEdit') }}"><i class="fas fa-users-cog fa-1x ml-2" title="Edit"></i></a></h2>
                            <p>
                                <div class="col-md-12">Username: {{$username}}</div>
                                <div class="col-md-12">Firstname: {{$firstname}}</div>
                                <div class="col-md-12">Lastname: {{$lastname}}</div>
                                <div class="col-md-12">Email: {{$email}}</div>
                                <div class="col-md-12">Role: Administration/Front-End</div>
                            </p>
                        </div>
                        <div>
                            <p class="userBio"></p>
                        </div>
                    </div>
                </div>
            </section>
        </main><!-- /.entryTitle -->
    </div>

</x-app-layout>


