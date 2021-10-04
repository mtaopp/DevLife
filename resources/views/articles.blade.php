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



                <ul>
                 @foreach ($articles as $article)
                    <li class="col-sm-12" id="article">
                        <div class="col-sm-10"  id="entryTitle">
                             <h2 class="articleTitle"><a href="/article/{{$article->id}}">{{ $article->title }}</a></h2>
                            <span class="cr-by">created by {{ $author[$article->author] }}</span>
                        </div>

                        <div class="row">
                            <div class="col-sm-6" id="entryImage">
                                <img src="
                                    @php
                                        if(is_numeric($article->image)) {
                                            echo $images[$article->image];
                                        } else {
                                            echo $article->image;
                                        }
                                    @endphp " alt="" class="entryImage" >
                            </div>

                            <div class="col-sm-6"  id="entryContent">
                                {{ $article->description}}
                                {{ $article->content }}
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
