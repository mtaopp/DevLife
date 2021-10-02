<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="entryTitle container">
        <main role="main" class="entryTitle">
            <section class="d-flex justify-content-center">
                <div class="userInformation w-100">

                    <div class="row w-100">
                    @if (isset($msg))
                        <div class="row w-100">{{ $msg }}</div>
                     @endif
                        <div class="row w-100 m-5">
                            <h1>Create a new article</h1>
                            <a href="{{ route('createCategory') }}">Create a new Category</a>
                        </div>

                        <section class="d-flex">


                                <form method="POST" action= "{{ route('profileUpdate') }}">
                                    @csrf
                                    <div class="row w-100">
                                        <div class="row w-100">
                                            <label class="my-2" for="category">Category</label>
                                            <input class="my-1" type="text" name="category" id="category">
                                        </div>
                                        <div class="row w-100">
                                            <label class="my-2" for="category">Category</label>
                                            <select class="my-1">
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="row w-100">
                                            <label class="my-2" for="description">Description</label>
                                            <input class="my-1" type="text" name="description" id="description">
                                        </div>
                                        <div class="row w-100">
                                            <label class="my-2" for="image">Image</label>
                                            <input class="my-1" type="text" name="image" id="image">
                                        </div>
                                        <div class="row w-100">
                                            <label class="my-2" for="content">Content</label>
                                            <input class="my-1" type="text" name="content" id="content">
                                        </div>
                                    </div>
                                    <br>
                                    <button class="px-2">Create Article</button>
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


