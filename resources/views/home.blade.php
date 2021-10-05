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

                    <li class="col-sm-12" id="article">
                        <div class="col-sm-10"  id="entryTitle">
                             <h2 class="articleTitle"><a href="/article/{{$article[1]->id}}">{{ $article[1]->title }}</a></h2>
                            <span class="cr-by">created by {{ $author[$article[1]->author] }}</span> 
                        </div>
                       
                        <div class="row">
                            <div class="col-sm-6" id="entryImage">
                                <img src="{{ $article[1]->image}}" alt="" class="entryImage">
                            </div>
    
                            <div class="col-sm-6"  id="entryContent">
                                {{ $article[1]->description}}

                                {{\Illuminate\Support\Str::limit($article[1]->content, 150)}}            
                                @if (strlen($article[1]->conent) > 150)
                                    <span id="ellipses">...</span>
                                    <span id="more">{{ substr($article[1]->content, 150) }}</span>
                                @endif
                                <a href="/article/{{$article[1]->id}}">Read more</a>
                            </div>
                        </div>

                        <div class="timestamp">
                            <span class="entryDetails">{{ $article[1]->created_at->diffForHumans() }}</span>
                        </div>
                    </li>
                    <hr>

                    <li class="col-sm-12" id="article">
                        <div class="col-sm-10"  id="entryTitle">
                             <h2 class="articleTitle"><a href="/article/{{$article[2]->id}}">{{ $article[2]->title }}</a></h2>
                            <span class="cr-by">created by {{ $author[$article[2]->author] }}</span> 
                        </div>
                       
                        <div class="row">
                            <div class="col-sm-6" id="entryImage">
                                <img src="{{ $article[2]->image}}" alt="" class="entryImage">
                            </div>
    
                            <div class="col-sm-6"  id="entryContent">
                                {{ $article[2]->description}}

                                {{\Illuminate\Support\Str::limit($article[2]->content, 150)}}            
                                @if (strlen($article[2]->conent) > 150)
                                    <span id="ellipses">...</span>
                                    <span id="more">{{ substr($article[2]->content, 150) }}</span>
                                @endif
                                <a href="/article/{{$article[2]->id}}">Read more</a>
                            </div>
                        </div>

                        <div class="timestamp">
                            <span class="entryDetails">{{ $article[2]->created_at->diffForHumans() }}</span>
                        </div>
                    </li>
                    <hr>
           
            <ul>
              

          </section>
          
       
          <!-- end recent posts -->
          
            <div>
              <div class="w-100">
                <div class="entryGallerie row">
                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                      <img src="{{ $article[0]->image}}" alt="" class="card-img-top img-fluid rounded mx-auto entryImage">
                      <div class="card-body">
                        {{ $article[0]->description}}

                        {{\Illuminate\Support\Str::limit($article[0]->content, 50)}}            
                        @if (strlen($article[0]->conent) > 50)
                            <span id="ellipses">...</span>
                            <span id="more">{{ substr($article[0]->content, 50) }}</span>
                        @endif
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                          <a href="/article/{{$article[0]->id}}">Read more</a>
                          </div>
                          <small><span class="entryDetails">{{ $article[0]->created_at->diffForHumans() }}</span></small>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                    <img src="{{ $article[1]->image}}" alt="" class="card-img-top img-fluid rounded mx-auto entryImage">
                      <div class="card-body">
                        {{ $article[1]->description}}

                        {{\Illuminate\Support\Str::limit($article[1]->content, 50)}}            
                        @if (strlen($article[1]->conent) > 50)
                            <span id="ellipses">...</span>
                            <span id="more">{{ substr($article[1]->content, 50) }}</span>
                        @endif
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                          <a href="/article/{{$article[1]->id}}">Read more</a>
                          </div>
                          <small><span class="entryDetails">{{ $article[1]->created_at->diffForHumans() }}</span></small>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                    <img src="{{ $article[2]->image}}" alt="" class="card-img-top img-fluid rounded mx-auto entryImage">
                      <div class="card-body">
                        {{ $article[2]->description}}

                        {{\Illuminate\Support\Str::limit($article[2]->content, 50)}}            
                        @if (strlen($article[2]->conent) > 50)
                            <span id="ellipses">...</span>
                            <span id="more">{{ substr($article[2]->content, 50) }}</span>
                        @endif
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                          <a href="/article/{{$article[2]->id}}">Read more</a>
                          </div>
                          <small><span class="entryDetails">{{ $article[2]->created_at->diffForHumans() }}</span></small>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                    <img src="{{ $article[3]->image}}" alt="" class="card-img-top img-fluid rounded mx-auto entryImage">
                      <div class="card-body">
                        {{ $article[3]->description}}

                        {{\Illuminate\Support\Str::limit($article[3]->content, 50)}}            
                        @if (strlen($article[3]->conent) > 50)
                            <span id="ellipses">...</span>
                            <span id="more">{{ substr($article[3]->content, 50) }}</span>
                        @endif
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                          <a href="/article/{{$article[3]->id}}">Read more</a>
                          </div>
                          <small><span class="entryDetails">{{ $article[3]->created_at->diffForHumans() }}</span></small>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                    <img src="{{ $article[4]->image}}" alt="" class="card-img-top img-fluid rounded mx-auto entryImage">
                      <div class="card-body">
                        {{ $article[4]->description}}

                        {{\Illuminate\Support\Str::limit($article[4]->content, 50)}}            
                        @if (strlen($article[4]->conent) > 50)
                            <span id="ellipses">...</span>
                            <span id="more">{{ substr($article[4]->content, 50) }}</span>
                        @endif
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                          <a href="/article/{{$article[4]->id}}">Read more</a>
                          </div>
                          <small><span class="entryDetails">{{ $article[4]->created_at->diffForHumans() }}</span></small>
                        </div>
                      </div>
                    </div>


                  </div><div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                    <img src="{{ $article[5]->image}}" alt="" class="card-img-top img-fluid rounded mx-auto entryImage">
                      <div class="card-body">
                        {{ $article[5]->description}}

                        {{\Illuminate\Support\Str::limit($article[5]->content, 50)}}            
                        @if (strlen($article[5]->conent) > 50)
                            <span id="ellipses">...</span>
                            <span id="more">{{ substr($article[5]->content, 50) }}</span>
                        @endif
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                          <a href="/article/{{$article[5]->id}}">Read more</a>
                          </div>
                          <small><span class="entryDetails">{{ $article[5]->created_at->diffForHumans() }}</span></small>
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
