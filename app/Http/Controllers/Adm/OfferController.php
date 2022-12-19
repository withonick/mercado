<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index(){
        return view('adm.offers.index', ['offers' => Offer::all()]);
    }

    public function create(){
        return view('adm.offers.create');
    }

    public function update(Request $request, Offer $offer){
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required | numeric',
            'img' => 'required | image | mimes:jpg,png,jpeg,gif,svg,webp|max:2048|dimensions:min_width=200,min_height=200,max_width=4000,max_height=4000',
        ]);


        $img = time().$request->file('img')->getClientOriginalName();
        $img_path = $request->file('img')->storeAs('offers', $img, 'public');

        $validated['img'] = '/storage/'.$img_path;

        $offer->create($validated);

        return redirect()->route('adm.offer.index');
    }
}
