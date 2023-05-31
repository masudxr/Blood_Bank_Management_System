<?php

namespace App\Http\Controllers;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    
    public function index(){
        return view('welcome');
    }
    
    public function store()
    {
        $attribute = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($attribute)) {

            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.'
            ]);
        }
        session()->regenerate();

        return redirect('/welcome')->with('success', 'Welcome Back!!');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'GoodBye!');
    }
}
