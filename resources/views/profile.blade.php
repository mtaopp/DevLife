@extends("master")

@section("main")
<div class="profilewindow">

  {{ $username }}
  {{ $firstname }}
  {{ $lastname }}
  {{ $email }}
  {{ $id }}
</div>
  <div class="profilewindow">

  </div>
<<<<<<< Updated upstream
  
=======

>>>>>>> Stashed changes
@section('pageTitle', 'Profile')

@section('main')

<h2>Welcome {{$firstname}} {{$lastname}} </h2>

Username: {{$username}}


@endsection
<div class="profilewindow">

  {{ $username }}
  <br>
  {{ $firstname }}
  <br>
  {{ $lastname }}
  <br>
  {{ $email }}
  <br>
  {{ $id }}
</div>
@endsection
