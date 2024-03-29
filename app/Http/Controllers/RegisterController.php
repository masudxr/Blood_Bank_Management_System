<?php

namespace App\Http\Controllers;

use App\Models\Blood;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('registration.create', [
            'bloods' => Blood::all()
        ]);
    }

    public function store()
    {
        // $done = request()->all();
        // dd($done);
        $attribute = request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:3|max:255',
            'address' => 'required|max:255',
            'phone' => 'required|min:10|max:255',
            'blood_group' => 'required|max:255',

        ]);
        
        $user = User::create($attribute);
        // ddd($user);

        auth()->login($user);

        session()->flash('success', 'Your Account Has Been Created!');

        return redirect('admin/welcome');
    }
}
