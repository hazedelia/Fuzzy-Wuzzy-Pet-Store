<?php

namespace App\Http\Controllers;
use App\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $list = Items::inRandomOrder()->get();
        $name = Auth::user()->name;
        // $newest = Items::orderBy('created_at', 'asc')->take(3)->get();
        return view('home')->with('list', $list)->with('name', $name);
          
    }
}