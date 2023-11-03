<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\TypeRegister;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.home');
    }

    public function stock(){
        $product = Stock::all();
        $totalEntrace = Stock::where('id_typeRegister', 1)->count();
        $totalExit = Stock::where('id_typeRegister', 2)->count();
        return view('pages.stock.home', compact('product', 'totalEntrace', 'totalExit'));
    }
}
