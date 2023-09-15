<?php

namespace App\Http\Controllers;

use App\Http\Requests\StockRequest;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StockController extends Controller
{
    public function index(Request $request)
    {
        $stock = Stock::paginate(10);
        return view('stocks', ['stockList' => $stock]);
    }

    public function create()
    {
        $stock = Stock::all();
        return view('stock-add', ['stock' => $stock]);
    }

    public function store(StockRequest $request)
    {
        $stock = Stock::create($request->all());

        if ($stock) {
            Session::flash('status', 'success');
            Session::flash('message', 'Add new stock success');
        }

        return redirect('/stocks');
    }
}
