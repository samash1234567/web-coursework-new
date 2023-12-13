@extends('layouts.show')

@section('title-page', 'Current Post')

@section('show-title', 'Post')

@section('show', 'Posts')

@section('content')
<p class="display-input" style="background-color: black;
                                margin-bottom: 0;
                                border: none;
"> POST IMAGE:
<img style="width: 50%;
            height: auto;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 5px;
            background-color: black;
            border: 1px solid #ddd;
            border-radius: 4px;


" src="{{asset('storage/' . $post->post_image)}}" alt="The users post thumbnail that they have included"></p>

    <div class="display-info">

    <ul class="display-text">
        <li class="display-input" >Post Title: {{$post->post_title}}</li>
        <li class="display-input">Post Content: {{$post->post_content}}</li>
        <li class="display-input">Thread Content: {{$post->thread->content}}</li>
    </ul>

<div class="submit-cancel">

    @can('delete')

<form method="POST" action="{{ route('posts.destroy', ['id' => $post->id]) }}">

    @csrf

    @method('DELETE')

    <button class="display-submit" type="submit">Delete Post</button>

</form>
@endcan

<a class="display-cancel" href="{{ route('posts.index')}}">Go Back</a>

    @can('edit')

 <button class="display-submit"><a class="display-edit" href="{{route('posts.edit', ['post_id' => $post->id])}}">Edit Post</a></button>

    @endcan
    </div>

    @endsection




@auth
    @section('create-comment')
    <form class="comment-form" action="/posts/{{$post->id}}/comments" method="post">


        @csrf


        <header>
            <p style="font-size: 25px">Want to comment?</p>
        </header>


        <div>
            <textarea class="text-area" name="body" placeholder="Comment here!"  rows="7" cols="60" wrap="soft"> </textarea>
        </div>

        <div>
            <button class="submit-comment" type="submit">Post Comment</button>
        </div>





    </form>


    @endsection
    @endauth

    @section('comments')
<section>

    <article class="display-comment"> {{--display flex--}}

<div>
{{-- comments for posts --}}
        @foreach ($comments as $comment)
        <header class="flex">
        <h3 class="comment-name"><a class="comment-name" href="{{ route('users.show', ['id' => $comment->user->id])}}">{{$comment->user->name}}</a></h3>
        <p class="comment-posted">Posted:<time> {{$comment->created_at->format('F j, Y, g:i a')}}</time></p> {{--extra small text--}}

    <p class="comment-text">{{$comment->body}}</p>
</header>
    @endforeach

</div>


    </article>


</section>

@endsection
