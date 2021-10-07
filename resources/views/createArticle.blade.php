<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <div class="entryTitle container">
        <main role="main" class="entryTitle">
            <section class="d-flex justify-content-center">
                <div class="create-article">
                    <div>
                        @if(session('success'))
                            {{ session('success') }}
                        @endif
                        @if(session('error'))
                            {{ session('error') }}
                        @endif
                        <div class="create">
                            <section class="create-entry d-flex">
                                <form  method="POST" action= "{{ route('storeArticle') }}" enctype="multipart/form-data">
                                    @csrf
                                        <div class="entry-articleBlog ">
                                            <div class="entry-description-list d-flex">
                                                <div class="create-category">
                                                    <label class="create-category" for="category"> <br> Category</label>
                                                    <select name="category" id="category" >
                                                        @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="">
                                                    <a href="{{ route('createCategory') }}">Create a new Category</a>
                                                </div>
                                                <div class="create-title">
                                                    <div class=" ">
                                                        <x-label hidden for="title" :value="__('Title')" />
                                                        <x-input type="text" placeholder="Title of your Post" name="title" id="title" required />
                                                    </div>
                                                </div>
                                                <div class="create-description">
                                                    <x-label hidden for="description" :value="__('Description')" />
                                                    <x-input type="text" placeholder="Teaser of the Blog" name="description" id="description" required />
                                                </div>
                                                <div class="create-fileName">
                                                    <x-label hidden for="filename" :value="__('File Name')" />
                                                    <x-input class="create-fileName" type="text" placeholder="Change Image Name" name="filename" id="tifilenametle" required />
                                                </div>
                                                <div class="create-images">
                                                    <label class="" for="image"></label>
                                                    <input id="image" type="file" name="image"/>
                                                </div>
                                                    <button class="create-articleButton">Create Article</button>
                                                </div>
                                                <div class="create-content">
                                                    <x-label hidden for="content" :value="__('Content')" />
                                                    <textarea class="create-content " type="text" placeholder="Content of you'r Article" cols="80" rows="15" name="content" id="content" required / >
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                    <br>
                                </form>
                            </section>
                            <div>
                                <p class="userBio"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main><!-- /.entryTitle -->
    </div>
</x-app-layout>


