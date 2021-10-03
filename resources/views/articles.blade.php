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
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi cumque accusantium cupiditate obcaecati natus vel aliquam, consequatur aliquid molestiae fugit, quas veritatis sequi perspiciatis. A, molestias. Neque voluptatum quasi eum facere laudantium, rerum laborum. Consectetur, rerum. Fugiat necessitatibus id, assumenda corrupti eaque nam libero exercitationem!
                    </p>
                </div>
                <div class="entryDetails">
                    <p> posted on test by test</p>
                </div>
            </p>
            <hr>
            @endforeach



            </section>
        </main><!-- /.entryTitle -->
    </div>

</x-app-layout>
