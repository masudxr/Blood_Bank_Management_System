<?php

namespace App\Http\Controllers;

use App\Models\Blood;
use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        return view('admin.store', [
            'bloods' => Blood::all()
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

    public function getUpdate()
    {
        $hi = request()->all();
        return view('stock.update', [
            'list' => Stock::find($hi)
        ]);
    }

    public function update()
    {

        $list = request()->input();
        $newList = Stock::find($list['id']);
        $newList->bags = request()->input('bags');
        // $newList->blood_group = request()->input('blood_group');
        $newList->update();
        return redirect('/list');
    }
}
