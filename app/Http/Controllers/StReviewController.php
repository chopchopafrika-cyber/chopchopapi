<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StReview;
use Illuminate\Support\Facades\Validator;

class StReviewController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'merchant_id'    => 'required|integer',
            'client_id'      => 'required|integer',
            'driver_id'      => 'nullable|integer',
            'review'         => 'required|string|max:1000',
            'rating'         => 'required|numeric|min:0|max:5',
            'status'         => 'nullable|string|in:pending,approved,rejected',
            'date_created'   => 'nullable|date',
            'ip_address'     => 'nullable|ip',
            'order_id'       => 'nullable|integer',
            'parent_id'      => 'nullable|integer',
            'reply_from'     => 'nullable|string|max:255',
            'date_modified'  => 'nullable|date',
            'as_anonymous'   => 'nullable|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors()
            ], 422);
        }

        // auto-set date_created if not provided
        $data = $request->all();
        if (empty($data['date_created'])) {
            $data['date_created'] = now();
        }

        $review = StReview::create($data);

        return response()->json([
            'success' => true,
            'data'    => $review
        ], 201);
    }
}
