@extends('layouts.master')

@section('title', 'Thread')

@section('content')

    <ul>
        <li>Thread Name: {{$thread->name}}</li>
        <li>Thread Content: {{$thread->content}}</li>
    </ul>

    <form method="POST" action="{{ route('threads.destroy', ['id' => $thread->id]) }}">

        @csrf

        @method('DELETE')

        <button type="submit">Delete Thread</button>

    </form>
@endsection
