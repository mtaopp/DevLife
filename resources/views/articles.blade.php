<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="entryTitle container">
        <main role="main" class="entryTitle">
            <section>
                <h1>Category Selction / Searchbar</h1>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <hr>
            </section>

            <section>
            <!-- <h2>Category 1</h2>

            @foreach ($articles as $article)
            <p class="article">
                <div class="entryTitle">
                    <img src=" {{ $article->image}}" alt="" class="entryImage" >
                </div>
                <div class="entryContent">
                    <img>
                    <p>{{ $article->content}}
                    </p>
                </div>
                <div class="entryDetails">
                    <p> posted {{$article->created_at->diffForHumans()}} by {{ $author[$article->author] }}
                </div>
            </p>
            <hr>
            @endforeach -->

            
                <ul>
                 @foreach ($articles as $article)   
                    <li class="col-sm-12" id="article">
                        <div class="col-sm-10"  id="entryTitle">
                             <h2 class="articleTitle"><a href="/article/{{$article->id}}">{{ $article->title }}</a></h2>
                            <span class="cr-by">created by {{ $author[$article->author] }}</span> 
                        </div>
                       
                        <div class="row">
                            <div class="col-sm-6" id="entryImage">
                                <img src="{{ $article->image}}" alt="" class="entryImage">
                            </div>
    
                            <div class="col-sm-6"  id="entryContent">
                                {{ $article->description}}

                                {{\Illuminate\Support\Str::limit($article->content, 150)}}            
                                @if (strlen($article->conent) > 150)
                                    <span id="ellipses">...</span>
                                    <span id="more">{{ substr($article->content, 100) }}</span>
                                @endif
                                <a href="/article/{{$article->id}}">Read more</a>
                            </div>
                        </div>

                        <div class="timestamp">
                            <span class="entryDetails">{{ $article->created_at->diffForHumans() }}</span>
                        </div>
                    </li>
                    <hr>
                    @endforeach
                </ul>
                


            </section>
        </main><!-- /.entryTitle -->
    </div>

</x-app-layout>
