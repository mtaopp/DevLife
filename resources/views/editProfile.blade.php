@extends('master')

@section('pageTitle', 'Edit User Profile')

@section('main')

    <label for="firstname">First Name</label>
    <input type="text" name="firstname" id="firstname" value="{{ $firstname }}">
    
    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" id="lastname" value="{{ $lastname }}">    
    
    <label for="username">Username</label>
    <input type="text" name="username" id="username" value="{{ $username }}">
    
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="{{ $email }}">





@endsection