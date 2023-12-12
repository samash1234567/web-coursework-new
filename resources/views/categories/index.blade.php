@extends('layouts.index')

@section('title-page', 'Categories')


@section('content')

<p class="display-posts">All Categories inside the Forum Page:</p>

@can('admin')
<a class="display-create" href="{{ route('categories.create')}}">Create a Category</a>
@endcan

<ul class="flexbox-container">
    @foreach ($categories as $category)
        <div class="multi-items">
        <li><a href="{{ route('categories.show', ['id' => $category->id])}}">{{$category->name}}</a></li>
        <li><a href="{{ route('categories.show', ['id' => $category->id])}}">{{$category->catdescription}}</a></li>
        </div>
        @endforeach
</ul>

@endsection
