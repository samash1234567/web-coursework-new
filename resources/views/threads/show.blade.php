@extends('layouts.show')

@section('title-page', 'Current Thread')

@section('show-title', 'Thread')

@section('show', 'Threads')

@section('content')

    <div class="display-info">
    <ul class="display-text">
        <li class="display-input">Thread Name: {{$thread->title}}</li>
        <li class="display-input">Thread Content: {{$thread->content}}</li>
    </ul>

    <div class="submit-cancel">
    <form method="POST" action="{{ route('threads.destroy', ['id' => $thread->id]) }}">

        @csrf

        @method('DELETE')

        <button class="display-submit" type="submit">Delete Thread</button>

    </form>
    <a class="display-cancel" href="{{ route('threads.index')}}">Go Back</a>
    </div>

    </div>


@endsection
