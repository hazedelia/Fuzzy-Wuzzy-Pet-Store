<?php

namespace App\Http\Controllers;
use App;
use App\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class HomeController extends Controller
{
    public function index()
    {
        $list = Items::inRandomOrder()->get();

        $name = null;
        if (Auth::user()) {
            $name = Auth::user()->name;
        }
    
        // $newest = Items::orderBy('created_at', 'asc')->take(3)->get();
        return view('home')->with('list', $list)->with('name', $name)->with('lang', App::getLocale());
    }

    public function changeLanguage(Request $request)
    {
        if ($request->has('lang')) {
            $lang = $request->input('lang');            

            if (in_array($lang, ['en', 'lv'])) {
                Session::put('locale', $lang);
            }
        }

        return redirect()->back();
    }
}