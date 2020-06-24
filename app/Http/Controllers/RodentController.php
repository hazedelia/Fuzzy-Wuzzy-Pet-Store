<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Items;
class RodentController extends Controller
{
    public function index()
    {
        $items = Items::orderBy('title', 'asc')->where('category', '=', 'RODENT')->get();
        return view('items')->with('list', $items)->with('lang', App::getLocale());
    }

}