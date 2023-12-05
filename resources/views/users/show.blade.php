@extends('layouts.users')

@section('title', 'User Profile')

@section('usercontent')

    <ul>
        <li>Username: {{$user->name}}</li>
        <li>Email: {{$user->email}}</li>
        <li>Date of Birth: {{$user->date_of_birth ?? 'Unknown'}}</li>
    </ul>

    <form method="POST" action="{{ route('users.destroy', ['id' => $user->id]) }}">

        @csrf

        @method('DELETE')

        <button type="submit">Delete User</button>

    </form>
@endsection
