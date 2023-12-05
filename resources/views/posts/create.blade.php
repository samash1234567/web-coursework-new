@extends('layouts.master')

@section('title', 'Create a Post')

@section('content')

<form method="POST" action="{{ route('posts.store')}}">

@csrf

<p>Post Title: <input type="text" name="post_title" value="{{ old('post_title')}}"></p>
<p>Post Content: <input type="text" name="post_content" value="{{ old('post_content')}}"></p>

<p>Thread Post is created to:
<select name="thread_id">

@foreach ($threads as $thread)

    <option value="{{ $thread->id }}"

        @if ($thread->id == old('thread_id'))
            selected="selected"
        @endif
        > {{ $thread->title}}
    </option>
@endforeach

</select>
</p>

<p>User creating post:
    <select name="user_id">

    @foreach ($users as $user)

        <option value="{{ $user->id }}"

            @if ($user->id == old('user_id'))
                selected="selected"
            @endif
            > {{ $user->name}}
        </option>
    @endforeach

    </select>
    </p>

<input type="submit" value="Submit">

<a href="{{ route('posts.index')}}">Cancel Post</a>

</form>

@endsection
