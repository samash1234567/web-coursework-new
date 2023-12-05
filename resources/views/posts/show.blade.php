@extends('layouts.master')

@section('title', 'Post')

@section('content')

    <ul>
        <li>Post Title: {{$post->post_title}}</li>
        <li>Post Content: {{$post->post_content}}</li>
        <li>Thread Content: {{$post->thread->content}}</li>
    </ul>

<form method="POST" action="{{ route('posts.destroy', ['id' => $post->id]) }}">

    @csrf

    @method('DELETE')

    <button type="submit">Delete Post</button>

</form>



@endsection
