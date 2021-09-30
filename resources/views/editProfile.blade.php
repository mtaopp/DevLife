@extends('master')

@section('pageTitle', 'Edit User Profile')

@section('main')


<form method="POST" action="/storeProfile">
    @csrf

    <label for="firstname">First Name</label><br>
    <input type="text" name="firstname" id="firstname" value="{{ $firstname }}"><br>

    <label for="lastname">Last Name</label><br>
    <input type="text" name="lastname" id="lastname" value="{{ $lastname }}"><br>

    <label for="username">Username</label><br>
    <input type="text" name="username" id="username" value="{{ $username }}"><br>

    <label for="email">Email</label><br>
    <input type="text" name="email" id="email" value="{{ $email }}"><br>
    <br>
    <button>Send</button>
    </form>

@endsection
