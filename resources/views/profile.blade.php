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

@section('pageTitle', 'Profile')

    <h2>Welcome {{$firstname}} {{$lastname}} </h2>

    Username: {{$username}}

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
    <a class="btn" href="/editProfile"><i class="fas fa-user-edit"></i></a>
@endsection

