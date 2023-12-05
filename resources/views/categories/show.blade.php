@extends('layouts.master')

@section('title', 'Category')

@section('content')

    <ul>
        <li>Category Name: {{$category->name}}</li>
        <li>Category Description: {{$category->catdescription}}</li>
    </ul>

    <form method="POST" action="{{ route('categories.destroy', ['id' => $category->id]) }}">

        @csrf

        @method('DELETE')

        <button type="submit">Delete Category</button>

    </form>
@endsection
