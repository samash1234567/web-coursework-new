@extends('layouts.master')

@section('title', 'Create a User')

@section('content')

<form method="POST" action="{{ route('users.store')}}">

@csrf

<p>User Name: <input type="text" name="name" value="{{ old('name')}}"></p>
<p>Password: <input type="text" name="password" value="{{ old('password')}}"></p>
<p>Email: <input type="text" name="email" value="{{ old('email')}}"></p>
<p>Date of Birth: <input type="text" name="date_of_birth" value="{{ old('date_of_birth')}}"></p>

<input type="submit" value="Submit">

<a href="{{ route('users.index')}}">Cancel User Creation</a>

</form>

@endsection
