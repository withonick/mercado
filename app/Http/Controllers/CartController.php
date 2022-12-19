<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Symfony\Component\String\b;

class CartController extends Controller
{
    public function index(){
        $count = 0;
        return view('cart.index', ['cart' => Auth::user()->carts, 'count' => $count]);
    }

    public function store(Request $request, Product $product){

        $incart = Auth::user()->carts()->where('product_id', $product->id)->first();

        if ($incart != null && $incart->size == $request->input('size')){
            $newcart = $request->input('amount') + $incart->amount;
            Auth::user()->cartProducts()->updateExistingPivot($product->id, ['amount' => $newcart]);
        }
        else{
            if ($request->input('amount') > 0){
                Auth::user()->cartProducts()->attach($product->id, ['size' => $request->input('size'), 'amount' => $request->input('amount'), 'key' => rand(1000, 9999)]);
            }
            else{
                return back()->withErrors('Product 0');
            }
        }

        return back();
    }

    public function destroy(Cart $cart){
        $cart->delete();
        return back();
    }

    public function update(Cart $cart, Request $request){
        $validated = $request->validate([
            'amount' => 'required | numeric',
            'size' => 'required',
        ]);

        Auth::user()->carts()->update($validated);

        return back();
    }
}
