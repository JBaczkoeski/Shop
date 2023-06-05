<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Graphic;
use App\Models\processor;
use App\Models\Producer;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Ram;
use App\Models\screenDiagonal;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
/**
post = product
*/
    public function index()
    {
        $products = Product::with('producer', 'processor', 'productsTypes', 'color', 'screenDiagonal')->get();

        $producers = Producer::all();

        $diagonals = ScreenDiagonal::all();

        $processors = Processor::all();

        $graphics = Graphic::all();

        $rams = Ram::all();

        $colors = Color::all();

        $products_types = ProductType::all();

        return view('admin.products')->with('products', $products)->with('producers', $producers)->with('diagonals', $diagonals)->with('processors', $processors)->with('graphics', $graphics)->with('rams', $rams)->with('colors', $colors)->with('products_types', $products_types);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.productCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
           'name' => 'required|max:255',
           'price' => 'required|numeric|min:0',
           'code' => 'required|max:255',
           'stock' => 'required|numeric|min:0',
           'image' => 'required|max:255',
       ]);

       Product::create($request->all());

       return redirect()->route('admin.products')->with('success', 'Product added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::with('producer', 'processor','ram', 'productsTypes', 'color', 'screenDiagonal')->find($id);

        return view('admin.product', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);

        return view('admin.productEdit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'max:255',
            'price' => 'numeric|min:0',
            'code' => 'max:255',
            'stock' => 'numeric|min:0',
            'image' => 'max:255',
        ]);

        $id->update($request->all());

        return redirect()->route('admin.products')->with('success', 'Product updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id->delete();

        return redirect()->route('admin.products')->with('success', 'Product deleted!');
    }
}
