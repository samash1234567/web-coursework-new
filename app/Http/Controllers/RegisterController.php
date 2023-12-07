<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'name' => 'required|max:50',
            'email' => 'required|email|max:50',
            'password' => 'required|max:150',
            'date_of_birth' => 'nullable|date',
        ]);

        $u = new User;

        $u->name = $validatedData['name'];
        $u->email = $validatedData['email'];
        $u->password = bcrypt($validatedData['password']);
        $u->date_of_birth = $validatedData['date_of_birth'];
        $u->save();

        auth()->login($u);

        session()->flash('message', 'User has successfully been registered!');

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
