<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    
    public function index(){
        return view('welcome');
    }

    public function loginView(){
        return view('sessions.create');
    }
    
    public function store()
    {
        return request()->all();
        $attribute = request()->validate([
            'email' => 'required|exists:users, email',
            'password' => 'required'
        ]);
        if (!auth()->attempt($attribute)) {

            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.'
            ]);
        }
        session()->regenerate();

        return redirect('/welcome');
    }

    public function show() 
    {
        return view('donar', [
            'users' => User::all()
        ]);
    }
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'GoodBye!');
    }
}
