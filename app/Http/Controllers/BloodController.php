<?php

namespace App\Http\Controllers;

use App\Models\Blood;
use Illuminate\Http\Request;

class BloodController extends Controller
{
    public function index()
    {
        $group = Blood::find(1);

        ddd($group);
        // return view('group');
    }
}
