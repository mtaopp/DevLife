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
            <h2>Category 1</h2>

            @foreach ($articles as $article)
            <p class="article">
                <div class="entryTitle">
                    <img src=" {{ $article->image}}" alt="" class="userImage">
                </div>
                <div class="entryContent">
                    <img>
                    <p>{{ $article->content}}
                    </p>
                </div>
                <div class="entryDetails">
                    <p> posted on test by {{ $article->author}}</p>
                </div>
            </p>
            <hr>
            @endforeach



            </section>
        </main><!-- /.entryTitle -->
    </div>

</x-app-layout>
