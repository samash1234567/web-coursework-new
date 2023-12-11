@extends('layouts.edit')

@section('title-page', 'Edit a Post')

@section('edit', 'Post')

@section('content')

<form class="display-form" method="POST" action="{{url('/admin/posts/update/'. $post->id)}}" enctype="multipart/form-data">

@csrf

@method('PUT')

<p class="display-text">Post editting: {{$post->post_title}}</p>

<p class="display-text"> New Post Title: <input class="display-input" type="text" name="post_title" value="{{ old('post_title')}}"></p>

<p class="display-text">New Post Content: <input class="display-input" type="text" name="post_content" value="{{ old('post_content')}}"></p>

<p class="display-text">New Thread Post is linked to:
<select class="display-input" name="thread_id">

 @foreach ($threads as $thread)

    <option value="{{ $thread->id }}"

        @if ($thread->id == old('thread_id'))
            selected="selected"
        @endif
        > {{ $thread->title}}
    </option>
@endforeach

</select>
</p>

<p class="display-text">New User creating post:
    <select class="display-input" name="user_id">

    @foreach ($users as $user)

        <option value="{{ $user->id }}"

            @if ($user->id == old('user_id'))
                selected="selected"
            @endif
            > {{ $user->name}}
        </option>
    @endforeach

    </select>
    </p>


    <p>Upload a new image to the Post:

        <input type="file" name="post_image">

    </p>

<div class="submit-cancel">

<input class="display-submit" type="submit" value="Submit">
<a class="display-cancel" href="{{ route('posts.show', ['id' => $post->id])}}">Cancel Edit</a>

</div>
</form>

@endsection
