<?php

namespace App\Http\Controllers;

use App\Models\StViewOrderStatus;
use Illuminate\Http\Request;

class StViewOrderStatusController extends Controller
{
     public function index ()
   {
        $orderStatus = StViewOrderStatus::all(); // Fetch all order statuses from the database
        // Logic to retrieve and return order status data
        return response()->json(['orderStatuses' => $orderStatus]);
   }
}

