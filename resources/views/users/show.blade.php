@extends('layouts.show')

@section('title-page', 'User Profile')

@section('show-title', 'User')

@section('show', 'Users')

@section('content')

    <div class="display-info">
    <ul class="display-text">
        <li class="display-input">Username: {{$user->name}}</li>
        <li class="display-input">Email: {{$user->email}}</li>
        <li class="display-input">Date of Birth: {{$user->date_of_birth ?? 'Unknown'}}</li>
    </ul>

    <div class="submit-cancel">
    <form method="POST" action="{{ route('users.destroy', ['id' => $user->id]) }}">

        @csrf

        @method('DELETE')

        <button class="display-submit" type="submit">Delete User</button>

    </form>
    <a class="display-cancel" href="{{ route('users.index')}}">Go Back</a>
    </div>
    </div>


    <div>

        display shown users comments and posts




    </div>


@endsection
