<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StCart;

class StCartController extends Controller
{
    public function index ()
   {
        $cart = StCart::all(); // Fetch all items in the cart from the database
        // Logic to retrieve and return cart data
        return response()->json(['cartaddon' => $cart]);
    }
}
