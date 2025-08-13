<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StMerchant; // Assuming you have a Merchant model

class MerchantController extends Controller
{
   public function index ()
   {
    $merchant = StMerchant::all(); // Fetch all merchants from the database
       // Logic to retrieve and return merchant data
       return response()->json(['merchant' => $merchant]);
   }
}

