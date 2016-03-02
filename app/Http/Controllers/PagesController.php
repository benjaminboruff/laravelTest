<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home()
    {
        $monsters = ["King Kong", "Godzilla", "Wolfman"];
        return view('welcome', compact('monsters'));
    }
    
    public function about()
    {
        return view('pages/about');
    }
    
    public function contact()
    {
        return view('pages/about');
    }
}
