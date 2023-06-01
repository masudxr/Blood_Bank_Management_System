<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index(){
        return view('stock.store');
    }

    public function store()
    {
        // return request()->all();
        $attribute = request()->validate([
            'bags' => 'required|max:255',
            'blood_group' => 'required|max:255',

        ]);

        // $stocks = Stock::all();
        Stock::create($attribute);
        return redirect('/welcome');
    }

    public function show() 
    {
        return view('stock.list', [
            'list' => Stock::all()
        ]);
    }
}
