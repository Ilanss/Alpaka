<?php

namespace App\Http\Controllers;

use App\Wine;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $products = Wine::paginate(30);
        return view('products.index', compact('products'));
    }

    public function view($slug) {
        $product = Wine::where('slug', $slug)->firstOrFail();
        //return $product;
        return view('products.view', compact('product'));
    }

//
}
