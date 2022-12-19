<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index(){
        return view('adm.coupons.index', ['coupons' => Coupon::all()]);
    }

    public function create(){
        return view('adm.coupons.create', ['categories' => Category::all()]);
    }

    public function store(Request $request, Coupon $coupon){
         $validated = $request->validate([
             'code' => 'required | max: 10 | unique:coupons',
             'time' => 'required | numeric',
             'percent' => 'required | numeric | max: 90',
         ]);


         $coupon->create($validated);

         return back();
    }

    public function destroy(Coupon $coupon){
        $coupon->delete();

        return back();
    }
}
