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
@section('main')
<div class="userInformation">
  <div class="userImage">
    <i class="userImage far fa-user"></i>
  </div>
  <div>
    <h2>Welcome: {{$firstname}} {{$lastname}} </h2>
    Username: {{$username}}
    <i class="fas fa-users-cog" title="Edit"></i>
    <br>
    Role: Administration/Front-End
    <i class="fas fa-users-cog" title="Edit" ></i>
  </div>
  <div>
    <p class="userBio"></p>
  </div>
</div>
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

