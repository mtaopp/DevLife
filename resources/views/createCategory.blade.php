<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="entryTitle container">
        <main role="main" class="entryTitle">
            <section class="d-flex justify-content-center">
                <div class="userInformation w-100">

                    <div class="row w-100">
                        <div class="row w-100 m-5">
                            <h1>Create a new category</h1>
                            <a href="{{ route('createArticle') }}">back</a>
                        </div>
                        <section class="d-flex">
                                {{-- {{ $msg }} --}}
                                <form method="POST" action= "{{ route('storeCategory') }}">
                                    @csrf
                                    <div class="w-100 justify-content-center">
                                        <div class="d-flex w-100">
                                            <x-label class="text-nowrap" for="name" :value="__('Category')" />
                                            <x-input class="ml-2" type="text" name="name" id="name" required />
                                        </div>
                                        @if(session('error'))
                                             <br>
                                            {{ session('error') }}
                                        @endif
                                    </div>
                                    <br>
                                    <button class="px-2">Create Category</button>
                                </form>
                        </section>
                        <div>
                            <p class="userBio"></p>
                        </div>
                    </div>
                </div>
            </section>
        </main><!-- /.entryTitle -->
    </div>

</x-app-layout>


