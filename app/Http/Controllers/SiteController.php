<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\TypeRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Stock::all();
        $contEntrace = Stock::where('id_typeRegister', 1)->count();
        $contExit = Stock::where('id_typeRegister', 2)->count();

        $entrace = Stock::where('id_typeRegister', 1)->pluck('price')->sum();
        $exit = Stock::where('id_typeRegister', 2)->pluck('price')->sum();
        $income = $exit - $entrace ;
        return view('pages.home', compact('product', 'contEntrace', 'contExit', 'entrace','exit','income'));
    }
}
