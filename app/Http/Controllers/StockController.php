<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\TypeRegister;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typeRegister = TypeRegister::all();
        $stock = Stock::paginate(3);
        return view('pages.stock.home', compact('stock', 'typeRegister'));
    }

    public function cancelAction($message, $typeAlert, $icon){
        return redirect()->route('stock.home')->with('sucesso',$message)->with('typeAlert', $typeAlert)->with('icon',$icon);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = $request->all();
        $product = Stock::create($product);
        return redirect()->route('stock.home')->with('sucesso', 'Product created with success!')->with('typeAlert', 'success')->with('icon','bi-patch-plus-fill');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $typeRegister = TypeRegister::all();
        $product = Stock::where('id', $id)->first();
        return view('pages.stock.details', compact('product','typeRegister'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id, Request $request)
    {
        $product = Stock::find($id);
        $product->fill($request->all());
        $product->save();
        return redirect()->route('stock.home')->with('sucesso', 'Product edited with success!')->with('typeAlert', 'success')->with('icon','bi-patch-check-fill');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Stock::find($id);
        $product->delete();
        return redirect()->route('stock.home')->with('sucesso', 'Product deleted with success!')->with('typeAlert', 'success')->with('icon','bi-patch-minus-fill');
    }
}
