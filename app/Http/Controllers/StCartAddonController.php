<?php

namespace App\Http\Controllers;

use App\Models\StCartAddon;
use Illuminate\Http\Request;


class StCartAddonController extends Controller
{
    public function index()
    {
        $addons = StCartAddon::all(); // Fetch all cart addons from the database
        // Logic to retrieve and return cart addon data
        return response()->json(['addons' => $addons]);
    }
}
