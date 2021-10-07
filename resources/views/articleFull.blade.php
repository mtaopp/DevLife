<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <main>
            
        <section class="container w-100">
            <ul>
                <li class="col-sm-12" id="article">
                    <div class="col-sm-12"  id="entryTitle">
                        <h2 class="articleTitle">{{ $article->title }}</h2>
                        <span class="cr-by">created by {{ $author[$article->author] }}</span> 
                        <div class="timestamp">
                            <span class="entryDetails"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6" id="entryImage">
                            <img src=" {{ $images[$article->image] }}" alt="" class="entryImage" >
                        </div>
                    </div>                   
                    <div class="row">
                        <div class="col-sm-12"  id="entryContent">
                            {{ $article->description}}
                            {{ $article->content }}
                        </div>
                    </div>
                </li>
                <hr>
            </ul>
        </section>   
    </main>
</x-app-layout>
