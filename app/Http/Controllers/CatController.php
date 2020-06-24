<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Items;
class CatController extends Controller
{
    public function index()
    {
        $items = Items::orderBy('title', 'asc')->where('category', '=', 'CAT')->get();
        return view('items')->with('items', $items)->with('lang', App::getLocale());
    }

}