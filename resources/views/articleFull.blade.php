<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <main>

            <!-- <div class="container container-full">
                    <div class="container-main">
                        <div class="post-container">
                        <h2 class="post-title">{{$article->title}}</h2>
                        <span class="created">Article created by {{$article->creator}}</span>
                        <div class="description">
                            {{$article->content}}
                        </div>
                        <span class="uploaded">{{$article->created_at->diffForHumans()}}</span>

                        <form action="/article/{{$article->id}}" method="post">
                            @csrf

                            @method('delete')
                            <button class="new-post button-type" type="submit">Delete post</button>

                            <button class="new-post button-art"><a href="/articles">back to Articles</a></button>
                        </form>         
                    </div>
                </div>
            </div> -->
        <section class="container w-100">
            <ul>
                <li class="col-sm-12" id="article">
                    <div class="col-sm-12"  id="entryTitle">
                            <h2 class="articleTitle">{{ $article->title }}</h2>
                        <span class="cr-by">created by {{ $author[$article->author] }}</span> 
                        <div class="timestamp">
                            <span class="entryDetails">{{ $article->created_at->diffForHumans() }}</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6" id="entryImage">
                            <img src=" {{ $article->image }}" alt="" class="entryImage" >
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
