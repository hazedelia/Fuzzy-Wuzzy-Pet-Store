<?php

namespace App\Http\Controllers;
use App\Items;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $list = Items::inRandomOrder()->get();
        // $newest = Items::orderBy('created_at', 'asc')->take(3)->get();
        return view('home')->with('list', $list);
          
    }
}