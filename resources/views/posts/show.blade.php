@extends('layouts.show')

@section('title-page', 'Current Post')

@section('show-title', 'Post')

@section('show', 'Posts')

@section('content')

    <div class="display-info">
    <ul class="display-text">
        <li class="display-input" >Post Title: {{$post->post_title}}</li>
        <li class="display-input">Post Content: {{$post->post_content}}</li>
        <li class="display-input">Thread Content: {{$post->thread->content}}</li>
    </ul>

<div class="submit-cancel">

<form method="POST" action="{{ route('posts.destroy', ['id' => $post->id]) }}">

    @csrf

    @method('DELETE')

    <button class="display-submit" type="submit">Delete Post</button>

</form>
<a class="display-cancel" href="{{ route('posts.index')}}">Go Back</a>

    </div>


@endsection
