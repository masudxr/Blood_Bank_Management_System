<?php

namespace App\Http\Controllers;

use App\Models\Blood;
use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index(){
        return view('stock.store', [
            'bloods'=> Blood::all()
        ]);
    }

    public function store()
    {
        // $stock = request()->all();
        // dd($stock);

        $attribute = request()->validate([
            'blood_group' => 'required|max:255',
            'bags' => 'required|max:255',
        ]);
        dd($attribute);

        // $stocks = Stock::all();
        // Stock::create($attribute);
        // return redirect('/welcome');
    }

    public function show() 
    {
        return view('stock.list', [
            'list' => Stock::all()
        ]);
    }
}
