<x-app-layout>
  <x-slot name="header">
  </x-slot>
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
      <hr><br>
      <section >
        <div class="entryTitle">
          <h2>A little Stretching</h2>
          <p class="entryContent">
            <a href="article">
              <img class="entryImage" src="../images/yogaMan.jpg" alt="imagesOne">
            </a>Etiam porta sem malesuada magna
            mollis euismod. Cras mattis consectetur purus sit amet fermentum.
            Aenean lacinia bibendum nulla sed consectetur.Etiam porta sem malesuada magna
            mollis euismod. Cras mattis consectetur purus sit amet fermentum.
            Aenean lacinia bibendum nulla sed consectetur mollis euismod. Cras mattis consectetur purus sit amet fermentum.
            Aenean lacinia bibendum nulla sed consectetur. <br><br><br>
            Etiam porta sem malesuada magna
            mollis euismod. Cras mattis consectetur purus sit amet fermentum.
            Aenean lacinia bibendum nulla sed consectetur.Etiam porta sem malesuada magna
            mollis euismod. Cras mattis consectetur purus sit amet fermentum.
            Aenean lacinia bibendum nulla sed consectetur mollis euismod. Cras mattis consectetur purus sit amet fermentum.
            Aenean lacinia bibendum nulla sed consectetur.
          </p>
          <a href="article">read more...</a>
        </div>
      </section>
      <hr>
      <section >
          <div class="entryTitle">
              <h2>Snack Time</h2>
              <p class="entryContent">
                <a href="article">
                  <img class="entryImage" src="../images/eatingChips.jpg" alt="imagesTwo">
                </a> <br>
                Etiam porta sem malesuada magna
                mollis euismod. Cras mattis consectetur purus sit amet fermentum.
                Aenean lacinia bibendum nulla sed consectetur.Etiam porta sem malesuada magna
                mollis euismod. Cras mattis consectetur purus sit amet fermentum.
                Aenean lacinia bibendum nulla sed consectetur mollis euismod. Cras mattis consectetur purus sit amet fermentum.
                Aenean lacinia bibendum nulla sed consectetur.
            </p>
          <a href="article">read more...</a>
          </div>
        </section>
        <hr>
        <section >

          <div class="entryTitle">
              <h2>Walk</h2>
              <p class="entryContent">
                <a href="article">
                  <img class="entryImage" src="../images/subaruduckdance.gif" alt="dancing duck">
                </a> <br>
                Etiam porta sem malesuada magna
                mollis euismod. Cras mattis consectetur purus sit amet fermentum.
                Aenean lacinia bibendum nulla sed consectetur.Etiam porta sem malesuada magna
                mollis euismod. Cras mattis consectetur purus sit amet fermentum.
                Aenean lacinia bibendum nulla sed consectetur mollis euismod. Cras mattis consectetur purus sit amet fermentum.
                Aenean lacinia bibendum nulla sed consectetur.
              </p>
              <a href="article">read more...</a>
          </div>
        </section>
        <hr>
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
              </div>
              <div class="col-md-4">
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
      