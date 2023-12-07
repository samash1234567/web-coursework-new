@extends('layouts.create')

@section('title-page', 'Create a Category')

@section('create', 'Category')

@section('content')

<form class="display-form" method="POST" action="{{ route('categories.store')}}">

@csrf

<p class="display-text">Category Name: <input class="display-input" type="text" name="name" value="{{ old('name')}}"></p>
<p class="display-text">Category Description: <input class="display-input" type="text" name="catdescription" value="{{ old('catdescription')}}"></p>

<div class="submit-cancel">

<input class="display-submit" type="submit" value="Submit">
<a class="display-cancel" href="{{ route('categories.index')}}">Cancel Category Creation</a>

</div>



</form>

@endsection
