<?php

namespace App\Http\Controllers;
use App\Models\Thread;

use Illuminate\Http\Request;

class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $threads = Thread::all();

        return view('threads.index', ['threads' => $threads]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('threads.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'title' => 'required|max:50',
            'content' => 'required|max:150',
        ]);

        $t = new Thread;

        $t->title = $validatedData['title'];
        $t->content = $validatedData['content'];
        $t->save();


        session()->flash('message', 'Thread has successfully been created');

        return redirect()->route('threads.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $thread = Thread::findOrFail($id);

        return view('threads.show', ['thread' => $thread]);
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
        $thread = Thread::findOrFail($id);

        $thread->delete();

        return redirect()->route('threads.index')->with('message', 'Thread has been deleted.');
    }
}
