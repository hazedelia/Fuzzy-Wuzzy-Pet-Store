<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;

class WelcomeController extends Controller
{
    public function index() {
        $items = Items:: all();

        return view('welcome', [
            'items'=> $items
        ]);
    }
}
