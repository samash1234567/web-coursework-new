<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Comment;
use App\Models\Post;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('admin');

        $users = User::all();

        return view('users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('admin');
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'name' => 'required|max:50',
            'email' => 'required|max:50',
            'password' => 'required|max:150',
            'date_of_birth' => 'nullable|date',
        ]);

        $u = new User;

        $u->name = $validatedData['name'];
        $u->email = $validatedData['email'];
        $u->password = $validatedData['password'];
        $u->date_of_birth = $validatedData['date_of_birth'];
        $u->save();


        session()->flash('message', 'User has successfully been created');

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        $comments = Comment::where('user_id', $id)->get();
        $posts = Post::where('user_id', $id)->get();

        return view('users.show', compact('posts', 'user', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('users.index')->with('message', 'User has been deleted.');
    }
}
