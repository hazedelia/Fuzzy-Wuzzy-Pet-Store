<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;
class ItemsController extends Controller
{
    public function index()
    {
        $items = Items::inRandomOrder()->take(8)->get();
        return view('items')->with('items', $items);
    }

}
