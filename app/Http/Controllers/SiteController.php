<?php

namespace App\Http\Controllers;

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

    public function siteCreateProduct(){
        $typeRegister = TypeRegister::all();
        return view('pages.stock.create', compact('typeRegister'));
    }
}
