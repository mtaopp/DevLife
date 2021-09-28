@extends("master")

@section("main")
  <div class="profilewindow">
    
  </div>
@extends('master')

@section('pageTitle', 'Profile')

@section('main')

<h2>Welcome [username]</h2>

Username: [usern]


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
