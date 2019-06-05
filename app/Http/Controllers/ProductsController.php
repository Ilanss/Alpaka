<?php

namespace App\Http\Controllers;

use App\Wine;
use App\Winery;
use App\Country;
use App\Category;
use App\Promotion;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $products = Wine::paginate(30);      
        //$product = $products->toJson();
        return view('pages.products')->with('products', $products);
    }

    public function view($slug) {
        $product = Wine::where('slug', $slug)->firstOrFail();
        //return $product;
        return view('products.view', compact('product'));
    }

    public function edit($id) {
        $countries = Country::all();
        $categories = Category::all();
        $wineries = Winery::all();
        $product = Wine::findOrFail($id);
        return view('products.edit', compact('product', 'countries', 'categories', 'wineries'));
    }

    public function promotions() {
        $products = Wine::join('promotions', 'wines.id', '=', 'promotions.wine_id')->get();

        //dd($products);

        return view('products.index', compact('products'));

    }

    public function create() {
        $countries = Country::all();
        $categories = Category::all();
        $wineries = Winery::all();
        return view('products.create', compact('countries', 'categories', 'wineries'));
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:45',
            'brand' => 'required|max:45',
            'winery_id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'country_id' => 'required|numeric',
            'price_wine' => 'required|numeric',
            'origin' => 'required|max:45',
            'size' => 'required|max:45',
            'varietal' => 'required|max:45',
            'good_year' => 'required|boolean',
            'date_production' => 'required|date',
            'serv_temp' => 'required|numeric',
            'description' => 'required|max:255',
            'stock_status' => 'required|boolean',
            'conditioning' => 'required|max:255',
            'ranking' => 'numeric',
            'alcohol_level' => 'required|numeric',
            'slug' => 'required|max:45',
            'delivery_delay' => 'required|max:10',
        ]);
        Wine::create($validatedData);

        return redirect('/products')->with('success', 'Vin ajouté');
    }

    public function update(Request $request, $id) {
        $validatedData = $request->validate([
            'name' => 'required|max:45',
            'brand' => 'required|max:45',
            'winery_id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'country_id' => 'required|numeric',
            'price_wine' => 'required|numeric',
            'origin' => 'required|max:45',
            'size' => 'required|max:45',
            'varietal' => 'required|max:45',
            'good_year' => 'required|boolean',
            'date_production' => 'required|date',
            'serv_temp' => 'required|numeric',
            'description' => 'required|max:255',
            'stock_status' => 'required|boolean',
            'conditioning' => 'required|max:255',
            'ranking' => 'numeric',
            'alcohol_level' => 'required|numeric',
            'slug' => 'required|max:45',
            'delivery_delay' => 'required|max:10',
        ]);
        Wine::where('id', $id)->first()->update($validatedData);

        return redirect('/products')->with('success', 'Vin mis à jour');
    }

    public function destroy($id) {
        $product = Wine::findOrFail($id);

        $product->promotions()->delete();
        //$product->ratings()->delete();
        //$product->users()->delete();
        $product->foods()->delete();

        $product->delete();

        return redirect('/products')->with('success', 'Vin supprimé');
    }

}
