<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        $attribute = request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:3|max:255',
            'address' => 'required|max:255',
            'phone' => 'required|min:10|max:255',
            'blood_group' => 'required|max:255',

        ]);
        $user = User::create($attribute);

        auth()->login($user);

        session()->flash('success', 'Your Account Has Been Created!');

        return redirect('/welcome');
    }
}
