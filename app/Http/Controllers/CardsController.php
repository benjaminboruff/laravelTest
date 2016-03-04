<?php

namespace App\Http\Controllers;

use App\Card;
use DB;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    //return all cards
    public function index()
    {
        $cards = Card::all();
        
        return view('cards/index', compact('cards'));
    }
    
    //return specific card
    public function show(Card $card)
    {
        return view('cards/show', compact('card'));
    }
}
