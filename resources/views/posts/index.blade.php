@extends('layouts.index')

@section('title-page', 'Current Post')


@section('content')

<p class="display-posts">All Posts inside the Thread Pages:</p>

<a class="display-create" href="{{ route('posts.create')}}">Create a Post</a>

    <ul class="flexbox-container">
        @foreach ($posts as $post)
            <li><a href="{{ route('posts.show', ['id' => $post->id])}}">{{$post->post_title}}</a></li>
        @endforeach
    </ul>






@endsection
