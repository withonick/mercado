<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $offer = Offer::first();
        return view('index', ['offer' => $offer]);
    }

    public function contacts(){
        return view('contacts');
    }

    public function print(){
        return view('print');
    }
}
