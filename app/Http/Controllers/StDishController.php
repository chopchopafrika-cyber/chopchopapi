<?php

namespace App\Http\Controllers;

use App\Models\StDish;
use Illuminate\Http\Request;

class StDishController extends Controller
{
    public function index()
    {
       $dish = StDish::all(); // Fetch all merchants from the database
       // Logic to retrieve and return merchant data
       return response()->json(['Dishes' => $dish]);
   }
}
