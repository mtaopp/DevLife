<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="articleTitle container">
        <main role="main" class="articleTitle">
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
                <ul>
                 @foreach ($articles as $article)
                    <li class="col-sm-12" id="article">
                        <div class="col-sm-12"  id="articleTitle">
                             <h2 class="articleTitle"><a href="/article/{{$article->id}}">{{ $article->title }}</a></h2>
                            <span class="cr-by">created by {{ $author[$article->author] }}</span>
                        </div>

                        <div class="row">
                            <div class="col-sm-6" id="articleImage">
                                @if (is_numeric($article->image))
                                    <img src="{{ $images[$article->image] }}" alt="" class="articleImage">
                                @else

                                    <img src="{{ $article->image }}" alt="" class="articleImage">
                                @endif


                            </div>
                            <div class="col-sm-6"  id="articleContent">
                                {{ $article->description}}

                                {{\Illuminate\Support\Str::limit($article->content, 150)}}
                                @if (strlen($article->conent) > 150)
                                    <span id="ellipses">...</span>
                                    <span id="more">{{ substr($article->content, 150) }}</span>
                                @endif
                                <a href="/article/{{$article->id}}">Read more</a>
                            </div>
                        </div>

                        <div class="timestamp">
                            <span class="articleDetails">{{ $article->created_at->diffForHumans() }}</span>
                        </div>
                    </li>
                    <hr>
                    @endforeach
                </ul>
            </section>
        </main><!-- /.articleTitle -->
    </div>

</x-app-layout>
