<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\StCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class StCategoryController extends Controller
{
    public function index ()
   {
    $category = StCategory::all(); // Fetch all merchants from the database
       // Logic to retrieve and return merchant data
       return response()->json(['categories' => $category]);
   }
}
