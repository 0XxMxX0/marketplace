<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\TypeRegister;
use Illuminate\Http\Request;
class StockController extends Controller
{

    public function __construct(){
        $this->middleware('typeRegisters');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stock = Stock::paginate(3);
        return view('pages.stock.products.products', compact('stock'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.stock.products.actions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required','string'],
            'price' => ['required','string'],
            'amount' => ['required','numeric'],
            'description' => ['required','string'],
            'id_typeRegister' => ['required', 'exists:type_register,id'],
        ]);

        $product = $request->all();
        $product['price'] = $this->formatPrice($product['price']) * $product['amount'];
        Stock::create($product);

        return redirect()->route('stock.products')->with('sucesso', 'Product created with success!')->with('typeAlert', 'success')->with('icon','bi-patch-plus-fill');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Stock::where('id', $id)->first();
        return view('pages.stock.products.actions.edit', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => ['required','string'],
            'price' => ['required','string'],
            'amount' => ['required','numeric'],
            'description' => ['required','string'],
            'id_typeRegister' => ['required', 'exists:type_register,id'],
        ]);

        $product = Stock::find($id)->fill($request->all());
        $product->price = $this->formatPrice($product->price);
        $product->save();
        return redirect()->route('stock.products')->with('sucesso', 'Product edited with success!')->with('typeAlert', 'success')->with('icon','bi-patch-check-fill');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Stock::find($id)->delete();
        return redirect()->route('stock.products')->with('sucesso', 'Product deleted with success!')->with('typeAlert', 'success')->with('icon','bi-patch-minus-fill');
    }

    public function formatPrice($price){
        return (float) str_replace(',','.', preg_replace('/[^\d,]/u','',$price));
    }
}
