<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <div class="entryTitle container">
        <main role="main" class="entryTitle">
            <section class="d-flex justify-content-center">
                <div class="userInformation w-100">

                    <div class="row w-100">
                        @if(session('success'))
                            {{ session('success') }}
                        @endif
                        @if(session('error'))
                            {{ session('error') }}
                        @endif
                        <div class="row w-100 m-5">
                            <h1>Create a new article</h1>
                            <a href="{{ route('createCategory') }}">Create a new Category</a>
                        </div>

                        <section class="d-flex">


                                <form method="POST" action= "{{ route('storeArticle') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row w-100">
                                        <div class="row w-100">
                                            <x-label class="text-nowrap" for="title" :value="__('Title')" />
                                            <x-input class="ml-2" type="text" name="title" id="title" required />


                                        </div>
                                        <div class="row w-100">
                                            <label class="my-2" for="category">Category</label>
                                            <select class="ml-2" name="category" id="category" >
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="row w-100">
                                            <x-label class="text-nowrap" for="description" :value="__('Description')" />
                                            <x-input class="ml-2" type="text" name="description" id="description" required />
                                        </div>
                                        <div class="row w-100">
                                            <x-label class="text-nowrap" for="filename" :value="__('File Name')" />
                                            <x-input class="ml-2" type="text" name="filename" id="tifilenametle" required />
                                        </div>
                                        <div class=" w-100">
                                            <label class="my-2" for="image">Image</label>
                                            <input class="my-2" id="image" type="file" name="image">
                                        </div>
                                        <div class="row w-100">
                                            <x-label class="text-nowrap" for="content" :value="__('Article')" />
                                            <x-input class="ml-2" type="text" name="content" id="content" required />
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


