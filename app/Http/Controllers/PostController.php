<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Thread;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::orderBy('name','asc')->get();
        $threads = Thread::orderBy('title','asc')->get();
        $comments = Comment::all();
        return view('posts.create', ['users' => $users], ['threads' => $threads],  ['comments' => $comments]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([

            'post_title' => 'required|max:50',
            'post_image' => 'required|image',
            'post_content' => 'required|max:100',
            'thread_id' => 'required|integer',
            'user_id' => 'required|integer',
        ]);

        $p = new Post;


        $p->post_image = $validatedData['post_image'] = request()->file('post_image')->store('postimages');
        $p->post_title = $validatedData['post_title'];
        $p->post_content = $validatedData['post_content'];
        $p->thread_id = $validatedData['thread_id'];
        $p->user_id = $validatedData['user_id'];
        $p->save();


        session()->flash('message', 'Post has successfully been created');

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $comments = Comment::all();
        return view('posts.show', ['post' => $post], ['comments' => $comments] );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($post_id)
    {
        if(auth()->user()?->id != $post_id) {
            session()->flash('message', 'You have to be the owner of the post to edit this!');
            return redirect()->route('posts.index');
        }

        $post = Post::findOrFail($post_id);
        $users = User::orderBy('name','asc')->get();
        $threads = Thread::orderBy('title','asc')->get();
        return view('posts.edit', compact('post', 'users', 'threads'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $post_id)
    {

        if(auth()->user()?->id != $post_id) {
            session()->flash('message', 'You have to be the owner of the post to edit this!');
            return redirect()->route('posts.index');
        }


        $validatedData = $request->validate([

            'post_title' => 'required|max:50',
            'post_image' => 'required|image',
            'post_content' => 'required|max:100',
            'thread_id' => 'required|integer',
            'user_id' => 'required|integer',
        ]);

        $p = Post::findOrFail($post_id);


        $p->post_image = $validatedData['post_image'] = request()->file('post_image')->store('postimages');
        $p->post_title = $validatedData['post_title'];
        $p->post_content = $validatedData['post_content'];
        $p->thread_id = $validatedData['thread_id'];
        $p->user_id = $validatedData['user_id'];
        $p->update();


        session()->flash('message', 'Post has been updated successfully!');

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        $post->delete();

        return redirect()->route('posts.index')->with('message', 'Post has been deleted.');
    }
}
