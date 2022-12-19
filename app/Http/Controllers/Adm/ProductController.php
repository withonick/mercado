<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('adm.products.index', ['products' => Product::all()]);
    }

    public function create(){
        return view('adm.products.create', ['categories' => Category::all()]);
    }

    public function store(Request $request, Product $product){
        $validated = $request->validate([
            'name' => 'required | max: 255',
            'price' => 'required | numeric',
            'description' => 'required',
            'category_id' => 'required | numeric | exists:categories,id',
            'img_one' => 'image | mimes:jpg,png,jpeg,gif,svg,webp|max:2048|dimensions:min_width=200,min_height=200,max_width=4000,max_height=4000',
            'img_two' => 'image | mimes:jpg,png,jpeg,gif,svg,webp|max:2048|dimensions:min_width=200,min_height=200,max_width=4000,max_height=4000',
            'img_three' => 'image | mimes:jpg,png,jpeg,gif,svg,webp|max:2048|dimensions:min_width=200,min_height=200,max_width=4000,max_height=4000',
        ]);

        $img_one = time().$request->file('img_one')->getClientOriginalName();
        $img_one_path = $request->file('img_one')->storeAs('products', $img_one, 'public');

        $validated['img_one'] = '/storage/'.$img_one_path;

        $img_two = time().$request->file('img_two')->getClientOriginalName();
        $img_two_path = $request->file('img_two')->storeAs('products', $img_two, 'public');

        $validated['img_two'] = '/storage/'.$img_two_path;

        $img_three = time().$request->file('img_three')->getClientOriginalName();
        $img_three_path = $request->file('img_three')->storeAs('products', $img_three, 'public');

        $validated['img_three'] = '/storage/'.$img_three_path;

        $product->create($validated);

        return back();
    }

    public function edit(Product $product){
        return view('adm.products.edit');
    }
}
