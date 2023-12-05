@extends('layouts.index')

@section('title-page', 'Threads')


@section('content')

<p class="display-posts">All Threads inside the Forum Page:</p>

<a class="display-create" href="{{ route('threads.create')}}">Create a Thread</a>

<ul>
    @foreach ($threads as $thread)
        <div class="multi-items">
            <li><a href="{{ route('threads.show', ['id' => $thread->id])}}">{{$thread->title}}</a></li>
            <li><a href="{{ route('threads.show', ['id' => $thread->id])}}">{{$thread->content}}</a></li>
            </div>
    @endforeach
</ul>

@endsection
