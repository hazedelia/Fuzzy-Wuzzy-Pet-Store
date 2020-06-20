<?php

namespace App\Http\Controllers;
use App\Items;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $items = Items::inRandomOrder()->take(8)->get();
        return view('home')->with('items', $items);
          
    }
}