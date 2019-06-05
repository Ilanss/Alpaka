<?php

namespace App\Http\Controllers;

use App\Wine;
use App\Winery;
use App\Country;
use App\Category;
use App\Promotion;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
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

    public function edit($id) {
        $countries = Country::all();
        $categories = Category::all();
        $wineries = Winery::all();
        $product = Wine::findOrFail($id);
        return view('products.edit', compact('product', 'countries', 'categories', 'wineries'));
    }

    public function search(Request $name) {
        $name = $name->input('search');
        $products = Wine::where('name', 'like', "%".$name."%")->get();
        return view('products.index', compact('products'));
    }

    public function promotions() {
        $products = Wine::join('promotions', 'wines.id', '=', 'promotions.wine_id')->get();
        return view('products.index', compact('products'));

    }

    public function create() {
        $countries = Country::all();
        $categories = Category::all();
        $wineries = Winery::all();
        return view('products.create', compact('countries', 'categories', 'wineries'));
    }

    public function store(Request $request) {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
            'delivery_delay' => 'required|max:10',

        ]);

        $name = str_slug($request->input('name')).'_'.time();
        $folder = public_path('images/products');
        $filePath = $name.'.'.$request->image->getClientOriginalExtension();
        $this->uploadOne($request->image, $folder, 'public', $name);

        $request->image->move(public_path('images/products'), $filePath);

        $products = [];

        $products['name'] = $request->input('name');
        $products['brand'] = $request->input('brand');
        $products['winery_id'] = $request->input('winery_id');
        $products['category_id'] = $request->input('category_id');
        $products['country_id'] = $request->input('country_id');
        $products['price_wine'] = $request->input('price_wine');
        $products['origin'] = $request->input('origin');
        $products['size'] = $request->input('size');
        $products['varietal'] = $request->input('varietal');
        $products['good_year'] = $request->input('good_year');
        $products['date_production'] = $request->input('date_production');
        $products['serv_temp'] = $request->input('serv_temp');
        $products['description'] = $request->input('description');
        $products['stock_status'] = $request->input('stock_status');
        $products['conditioning'] = $request->input('conditioning');
        $products['ranking'] = $request->input('ranking');
        $products['alcohol_level'] = $request->input('alcohol_level');
        $products['slug'] = str_slug($request->input('name'));
        $products['delivery_delay'] = $request->input('delivery_delay');
        $products['image'] = $filePath;


        Wine::create($products);

        return redirect('/products')->with('success', 'Vin ajouté');
    }

    public function update(Request $request, $id) {
        $request->validate([
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
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date_production' => 'required|date',
            'serv_temp' => 'required|numeric',
            'description' => 'required|max:255',
            'stock_status' => 'required|boolean',
            'conditioning' => 'required|max:255',
            'ranking' => 'numeric',
            'alcohol_level' => 'required|numeric',
            'delivery_delay' => 'required|max:10',
        ]);

        $products = [];

        if($request->hasFile('image')) {

            $name = str_slug($request->input('name')) . '_' . time();
            $folder = public_path('images/products');
            $filePath = $name . '.' . $request->image->getClientOriginalExtension();
            $this->uploadOne($request->image, $folder, 'public', $name);

            $request->image->move(public_path('images/products'), $filePath);
            $products['image'] = $filePath;

            $link = Wine::where('id', $id)->first()->value('image');
            unlink(public_path('images/products/'.$link));
        }

        $products['name'] = $request->input('name');
        $products['brand'] = $request->input('brand');
        $products['winery_id'] = $request->input('winery_id');
        $products['category_id'] = $request->input('category_id');
        $products['country_id'] = $request->input('country_id');
        $products['price_wine'] = $request->input('price_wine');
        $products['origin'] = $request->input('origin');
        $products['size'] = $request->input('size');
        $products['varietal'] = $request->input('varietal');
        $products['good_year'] = $request->input('good_year');
        $products['date_production'] = $request->input('date_production');
        $products['serv_temp'] = $request->input('serv_temp');
        $products['description'] = $request->input('description');
        $products['stock_status'] = $request->input('stock_status');
        $products['conditioning'] = $request->input('conditioning');
        $products['ranking'] = $request->input('ranking');
        $products['alcohol_level'] = $request->input('alcohol_level');
        $products['slug'] = str_slug($request->input('name'));
        $products['delivery_delay'] = $request->input('delivery_delay');

        Wine::where('id', $id)->first()->update($products);

        return redirect('/products')->with('success', 'Vin mis à jour');
    }

    public function destroy($id) {
        $product = Wine::findOrFail($id);

        $link = $product->image;
        unlink(public_path('images/products/'.$link));

        $product->promotions()->delete();
        //$product->ratings()->delete();
        //$product->users()->delete();
        $product->foods()->delete();

        $product->delete();

        return redirect('/products')->with('success', 'Vin supprimé');
    }

    public function uploadOne(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null)
    {
        $name = !is_null($filename) ? $filename : str_random(25);

        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);

        return $file;
    }

}
