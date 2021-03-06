<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Products Web Routes
     */
    public function index()
    {
        // $products = Product::take(10)->get();
        // $products = Product::all();
        return view('shop.index');
    }

    /**
     * Products API Routes
     */
    public function productListAPI()
    {
        $products = Product::paginate(10);
        return $products;
    }

    /**
     * Products API Routes
     */
    public function adminProductList()
    {
        // $products = Product::paginate(10);
        // return $products;
        return view('admin.product.index');
    }

    /**
     * Admin Products API Routes
     */
    public function adminProductListAPI(){
        $products = Product::paginate(10);
        return $products;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::where('slug', '=', $id)->get();
        return view('admin.product.show', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    /**
     * Payment
     */
    public function checkout()
    {
        // return view('shop.checkout', ['products' => $products]);
        return view('shop.checkout');
    }
}
