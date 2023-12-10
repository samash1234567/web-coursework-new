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

        <p class="display-title">User {{$user->name}} comments and posts:</p>

        @foreach ($comments as $comment)

        <div class="display-info">
        <ul class="display-text">
            <li class="display-input">Post associated with comment: <a class="display-input-a" href="{{ route('posts.show', ['id' => $comment->post->id])}}">{{$comment->post->post_title}}</a></li>
            <li class="display-input"> Comment: {{$comment->body}}</li>
        </ul>
        </div>

        @endforeach



    </div>


@endsection
