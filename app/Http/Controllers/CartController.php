<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StCart;

class StCartController extends Controller
{
  $cart = StCart::all(); // Fetch all carts from the database
       // Logic to retrieve and return cart data
       return response()->json(['cart' => $cart]);
   }
}
