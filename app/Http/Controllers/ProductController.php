<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Graphic;
use App\Models\processor;
use App\Models\Producer;
use App\Models\Product;
use App\Models\Product_type;
use App\Models\ProductType;
use App\Models\Ram;
use App\Models\screenDiagonal;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
/**

*/
    public function index()
    {
        $products = Product::with('producer', 'processor', 'productsTypes', 'color', 'screenDiagonal', 'graphic')->get();

        $producers = Producer::all();

        $diagonals = ScreenDiagonal::all();

        $processors = Processor::all();

        $graphics = Graphic::all();

        $rams = Ram::all();

        $colors = Color::all();

        $products_types = ProductType::all();

        return view('user.products')->with('products', $products)->with('producers', $producers)->with('diagonals', $diagonals)->with('processors', $processors)->with('graphics', $graphics)->with('rams', $rams)->with('colors', $colors)->with('products_types', $products_types);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::with('producer', 'processor','ram', 'products_types', 'color', 'screenDiagonal')->find($id);

        return view('user.product', compact('product'));
    }

}
