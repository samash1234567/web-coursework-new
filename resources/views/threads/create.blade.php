@extends('layouts.create')

@section('title-page', 'Create a Thread')

@section('create','Thread')

@section('content')

<form class="display-form" method="POST" action="{{ route('threads.store')}}">

@csrf

<p class="display-text">Thread Title: <input class="display-input" type="text" name="title" value="{{ old('title')}}"></p>
<p class="display-text">Thread Content: <input class="display-input" type="text" name="content" value="{{ old('content')}}"></p>

<div class="submit-cancel">

<input class="display-submit" type="submit" value="Submit">
<a class="display-cancel" href="{{ route('threads.index')}}">Cancel Thread Creation</a>

</div>


</form>

@endsection
