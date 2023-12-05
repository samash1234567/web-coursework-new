@extends('layouts.master')

@section('title', 'Create a Thread')

@section('content')

<form method="POST" action="{{ route('threads.store')}}">

@csrf

<p>Thread Title: <input type="text" name="title" value="{{ old('title')}}"></p>
<p>Thread Content: <input type="text" name="content" value="{{ old('content')}}"></p>

<input type="submit" value="Submit">

<a href="{{ route('threads.index')}}">Cancel Thread Creation</a>



</form>

@endsection
