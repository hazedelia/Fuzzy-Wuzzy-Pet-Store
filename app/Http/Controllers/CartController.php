<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;

class CartController extends Controller
{
    public function add(){
        // add($itemsID);
        return view('cart')->with('cart');
    }
}
    





