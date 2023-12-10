@extends('layouts.index')

@section('title-page', 'User Profiles')

@section('content')
    <p class="display-posts">All Users inside the Forum Page:</p>

    @auth('admin')

    <a class="display-create" href="{{ route('users.create')}}">Create a User</a>
    @endauth

    <ul>
        @foreach ($users as $user)
            <li><a href="{{ route('users.show', ['id' => $user->id])}}">{{$user->name}}</a></li>
        @endforeach
    </ul>

@endsection
