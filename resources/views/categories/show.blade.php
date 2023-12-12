@extends('layouts.show')

@section('title-page', 'Current Category')

@section('show-title', 'Category')

@section('show', 'Categories')

@section('content')

        <div class="display-info">
        <ul class="display-text">
            <li class="display-input">Category Name: {{$category->name}}</li>
            <li class="display-input">Category Description: {{$category->catdescription}}</li>
        </ul>

        <div class="submit-cancel">
            @can('admin')
                
        <form method="POST" action="{{ route('categories.destroy', ['id' => $category->id]) }}">

            @csrf

            @method('DELETE')

            <button class="display-submit" type="submit">Delete Category</button>

        </form>
        @endcan
    <a class="display-cancel" href="{{ route('categories.index')}}">Go Back</a>

    </div>

    </div>
@endsection
