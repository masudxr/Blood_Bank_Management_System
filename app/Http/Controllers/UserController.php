<?php

namespace App\Http\Controllers;

use App\Models\Blood;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{

    public function index()
    {
        // $user = User::all();

        // if (request('search')) 
        // {
        //     $user->where('name', 'like', '%' .request('search') . '%');
        // }

        return view('admin.welcome');
    }

    public function loginView()
    {
        return view('sessions.create');
    }

    public function store()
    {
        // return request()->all();
        // $user = request()->all();
        // dd($user);
        $attribute = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        // dd($attribute);
        if (!auth()->attempt($attribute)) {

            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.'
            ]);
        }
        session()->regenerate();

        return redirect('admin/welcome');
    }

    public function show()
    {
        $donors = User::all();

        if (request('search')) {
            $donors
                ->where('blood_group', 'like', '%' . request('search') . '%');
        }

        return view('donar', [
            'users' => User::all()
        ]);
    }
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'GoodBye!');
    }

    public function adminList()
    {
        $users = User::all();
        return view('admin.donorList', [
            'users' => $users
        ]);
    }

    public function getDonarUpdatePage()
    {
        $hi = request()->all();
        // dd($hi);
        return view('admin.edit', [
            'users' => User::find($hi),
            'bloods' => Blood::all()

        ]);
    }

    public function edit()
    {
        $list = request()->input();

        $updateUser = User::find($list['id']);

        $updateUser->name = request()->input('name');
        $updateUser->email = request()->input('email');
        $updateUser->password = request()->input('password');
        $updateUser->address = request()->input('address');
        $updateUser->phone = request()->input('phone');
        $updateUser->blood_group = request()->input('blood_group');
        $updateUser->update();
        return redirect('admin/donor');
    }

    public function getDelete()
    {
        $list = request()->input();
        $deleteUser = User::find($list['id']);
        $deleteUser->delete();
        return redirect('admin/donor');
    }

    public function user()
    {
        return view('users.user');
    }
}
