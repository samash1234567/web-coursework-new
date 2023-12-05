@extends('layouts.master')

@section('title', 'Create a Category')

@section('content')

<form method="POST" action="{{ route('categories.store')}}">

@csrf

<p>Category Name: <input type="text" name="name" value="{{ old('name')}}"></p>
<p>Category Description: <input type="text" name="catdescription" value="{{ old('catdescription')}}"></p>

<input type="submit" value="Submit">

<a href="{{ route('categories.index')}}">Cancel Category Creation</a>



</form>

@endsection
