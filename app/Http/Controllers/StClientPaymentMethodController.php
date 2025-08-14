<?php

namespace App\Http\Controllers;

use App\Models\StClientPaymentMethod;
use Illuminate\Http\Request;

class StClientPaymentMethodController extends Controller
{
    public function index()
    {
        return response()->json(StClientPaymentMethod::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'payment_type' => 'required|string|in:credit_card,debit_card,paypal',
            'card_number' => 'required_if:payment_type,credit_card,debit_card|string|max:20',
            'expiry_date' => 'required_if:payment_type,credit_card,debit_card|string|max:5',
            'cvv' => 'required_if:payment_type,credit_card,debit_card|string|max:4',
            'paypal_email' => 'required_if:payment_type,paypal|email',
            'is_default' => 'boolean',
        ]);

        $paymentMethod = StClientPaymentMethod::create($data);
        return response()->json($paymentMethod, 201);
    }

    public function show(StClientPaymentMethod $paymentMethod)
    {
        return response()->json($paymentMethod);
    }

    public function update(Request $request, StClientPaymentMethod $paymentMethod)
    {
        $data = $request->validate([
            'is_default' => 'sometimes|boolean',
            'expiry_date' => 'sometimes|string|max:5',
        ]);

        $paymentMethod->update($data);
        return response()->json($paymentMethod);
    }

    public function destroy(StClientPaymentMethod $paymentMethod)
    {
        $paymentMethod->delete();
        return response()->json(null, 204);
    }
}
