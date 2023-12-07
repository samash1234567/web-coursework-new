@extends('layouts.create')

@section('title-page', 'Create a User')

@section('create', 'User')

@section('content')

<form class="display-form" method="POST" action="{{ route('users.store')}}">

@csrf

<p class="display-text">User Name: <input class="display-input" type="text" name="name" value="{{ old('name')}}"></p>
<p class="display-text">Password: <input class="display-input" type="password" name="password" value="{{ old('password')}}"></p>
<p class="display-text">Email: <input class="display-input" type="email" name="email" value="{{ old('email')}}"></p>
<p class="display-text">Date of Birth: <input class="display-input" type="date" name="date_of_birth" value="{{ old('date_of_birth')}}"></p>

<div class="submit-cancel">

<input class="display-submit" type="submit" value="Submit">
<a class="display-cancel" href="{{ route('users.index')}}">Cancel User Creation</a>
</div>
</form>

@endsection
