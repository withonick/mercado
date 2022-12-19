<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index', ['categories' => Category::all(), 'products' => Product::all()]);
    }

    public function indexCategory(Category $category){
        return view('products.index', ['products' => $category->products, 'categories' => Category::all()]);
    }

    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }

    public function wishlist(){
        return view('products.wishlist', ['products' => Auth::user()->productsLiked()->get()]);
    }

    public function productsLiked(Product $product){
        Auth::user()->productsLiked()->toggle($product->id);
        return back()->with('message', 'Добавлен в желаемого');
    }
}
