<x-app-layout>
    <x-slot name="header">

    </x-slot>
    <!-- start carousel -->
    <div class="entryTitle container">
        <main role="main" class="entryTitle">
          <section>
                  <div id="carouselExampleControls" class="carousel slide align-center" data-ride="carousel" align="center">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../images/codingOne.jpg" class="d-block" alt="">
              </div>
              <div class="carousel-item">
                <img src="../images/devPersonOne.jpg" class="d-block" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../images/sportsTool.jpg" class="d-block" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            </div>
          </section>
          <!-- end carousel -->
          <hr>
          <br>
          <!-- rescent post section -->
          <section><h1>Recent Posts</h1></section>
          
          <section id="recentArticles">
            </ul>
            
               <li class="col-sm-12" id="article">
                        <div class="col-sm-10"  id="entryTitle">
                             <h2 class="articleTitle"><a href="/article/{{$article[0]->id}}">{{ $article[0]->title }}</a></h2>
                            <span class="cr-by">created by {{ $author[$article[0]->author] }}</span> 
                        </div>
                       
                        <div class="row">
                            <div class="col-sm-6" id="entryImage">
                                <img src="{{ $article[0]->image}}" alt="" class="entryImage">
                            </div>
    
                            <div class="col-sm-6"  id="entryContent">
                                {{ $article[0]->description}}

                                {{\Illuminate\Support\Str::limit($article[0]->content, 150)}}            
                                @if (strlen($article[0]->conent) > 150)
                                    <span id="ellipses">...</span>
                                    <span id="more">{{ substr($article[0]->content, 150) }}</span>
                                @endif
                                <a href="/article/{{$article[0]->id}}">Read more</a>
                            </div>
                        </div>

                        <div class="timestamp">
                            <span class="entryDetails">{{ $article[0]->created_at->diffForHumans() }}</span>
                        </div>
                    </li>
                    <hr>
           
            <ul>
              

          </section>
          
       
          <!-- end recent posts -->
            <hr>
            <div>
              <div class="w-100">
                <div class="entryGallerie row">
                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                      <img class="card-img-top img-fluid rounded mx-auto entryImage" src="../images/devNote.jpg" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <a href="article">read more...</a>
                          </div>
                          <small class="text-muted">9 mins</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                      <img class="card-img-top img-fluid rounded mx-auto entryImage" src="../images/devOne.jpg" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <a href="article">read more...</a>
                          </div>
                          <small class="text-muted">9 mins</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                      <img class="card-img-top img-fluid rounded mx-auto entryImage" src="../images/devTwo.jpg" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <a href="article">read more...</a>
                          </div>
                          <small class="text-muted">9 mins</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                      <img class="card-img-top img-fluid rounded mx-auto entryImage" src="../images/devThree.jpg" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <a href="article">read more...</a>
                          </div>
                          <small class="text-muted">9 mins</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                      <img class="card-img-top img-fluid rounded mx-auto entryImage" src="../images/coding.jpg" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <a href="article">read more...</a>
                          </div>
                          <small class="text-muted">9 mins</small>
                        </div>
                      </div>
                    </div>
                  </div><div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                      <img class="card-img-top img-fluid rounded mx-auto entryImage" src="../images/stretching.jpg" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <a href="article">read more...</a>
                          </div>
                          <small class="text-muted">9 mins</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </main><!-- /.entryTitle -->

</x-app-layout>
