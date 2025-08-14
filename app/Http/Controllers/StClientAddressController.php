<?php

namespace App\Http\Controllers;

use App\Models\StClientAddress;
use Illuminate\Http\Request;

class StClientAddressController extends Controller
{
    public function index()
    {
        return response()->json(StClientAddress::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'address_line1' => 'required|string|max:255',
            'address_line2' => 'nullable|string|max:255',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'postal_code' => 'required|string|max:20',
            'country' => 'required|string|max:100',
            'is_default' => 'boolean',
        ]);

        $address = StClientAddress::create($data);
        return response()->json($address, 201);
    }

    public function show(StClientAddress $address)
    {
        return response()->json($address);
    }

    public function update(Request $request, StClientAddress $address)
    {
        $data = $request->validate([
            'address_line1' => 'sometimes|string|max:255',
            'address_line2' => 'nullable|string|max:255',
            'city' => 'sometimes|string|max:100',
            'state' => 'sometimes|string|max:100',
            'postal_code' => 'sometimes|string|max:20',
            'country' => 'sometimes|string|max:100',
            'is_default' => 'sometimes|boolean',
        ]);

        $address->update($data);
        return response()->json($address);
    }

    public function destroy(StClientAddress $address)
    {
        $address->delete();
        return response()->json(null, 204);
    }
}
