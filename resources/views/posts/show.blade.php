@extends('layouts.show')

@section('title-page', 'Current Post')

@section('show-title', 'Post')

@section('show', 'Posts')

@section('content')

    <div class="display-info">
    <ul class="display-text">
        <li class="display-input" >Post Title: {{$post->post_title}}</li>
        <li class="display-input">Post Content: {{$post->post_content}}</li>
        <li class="display-input">Thread Content: {{$post->thread->content}}</li>
    </ul>

<div class="submit-cancel">

<form method="POST" action="{{ route('posts.destroy', ['id' => $post->id]) }}">

    @csrf

    @method('DELETE')

    <button class="display-submit" type="submit">Delete Post</button>

</form>
<a class="display-cancel" href="{{ route('posts.index')}}">Go Back</a>

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
