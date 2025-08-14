<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StOrdernew;

class StOrderNewController extends Controller
{
    public function store(Request $request)
    {
        // Collect all fields manually with safe defaults
        $data = [
            'order_id' => $request->input('order_id', 0),
            'order_uuid' => $request->input('order_uuid', ''),
            'order_reference' => $request->input('order_reference', ''),
            'merchant_id' => $request->input('merchant_id', 0),
            'client_id' => $request->input('client_id', 0),
            'status' => $request->input('status', 'pending'),
            'payment_status' => $request->input('payment_status', 'unpaid'),
            'delivery_status' => $request->input('delivery_status', 'pending'),
            'service_code' => $request->input('service_code', ''),
            'payment_code' => $request->input('payment_code', ''),
            'total_discount' => $request->input('total_discount', 0),
            'points' => $request->input('points', 0),
            'sub_total' => $request->input('sub_total', 0),
            'sub_total_less_discount' => $request->input('sub_total_less_discount', 0),
            'service_fee' => $request->input('service_fee', 0),
            'small_order_fee' => $request->input('small_order_fee', 0),
            'delivery_fee' => $request->input('delivery_fee', 0),
            'packaging_fee' => $request->input('packaging_fee', 0),
            'card_fee' => $request->input('card_fee', 0),
            'tax_type' => $request->input('tax_type', ''),
            'tax' => $request->input('tax', 0),
            'tax_total' => $request->input('tax_total', 0),
            'courier_tip' => $request->input('courier_tip', 0),
            'total' => $request->input('total', 0),
            'amount_due' => $request->input('amount_due', 0),
            'wallet_amount' => $request->input('wallet_amount', 0),
            'promo_code' => $request->input('promo_code', ''),
            'promo_total' => $request->input('promo_total', 0),
            'promo_cap' => $request->input('promo_cap', 0),
            'promo_owner' => $request->input('promo_owner', ''),
            'offer_discount' => $request->input('offer_discount', 0),
            'offer_total' => $request->input('offer_total', 0),
            'offer_cap' => $request->input('offer_cap', 0),
            'whento_deliver' => $request->input('whento_deliver', ''),
            'delivery_date' => $request->input('delivery_date', now()),
            'delivery_time' => $request->input('delivery_time', ''),
            'delivery_date_time' => $request->input('delivery_date_time', now()),
            'delivery_time_end' => $request->input('delivery_time_end', ''),
            'order_accepted_at' => $request->input('order_accepted_at', now()),
            'preparation_time_estimation' => $request->input('preparation_time_estimation', 0),
            'pickup_time' => $request->input('pickup_time', now()),
            'delivery_time_estimation' => $request->input('delivery_time_estimation', 0),
            'commission_type' => $request->input('commission_type', ''),
            'commission_value' => $request->input('commission_value', 0),
            'commission_based' => $request->input('commission_based', ''),
            'commission' => $request->input('commission', 0),
            'merchant_earning' => $request->input('merchant_earning', 0),
            'total_original' => $request->input('total_original', 0),
            'commission_original' => $request->input('commission_original', 0),
            'merchant_earning_original' => $request->input('merchant_earning_original', 0),
            'adjustment_commission' => $request->input('adjustment_commission', 0),
            'adjustment_total' => $request->input('adjustment_total', 0),
            'use_currency_code' => $request->input('use_currency_code', 'USD'),
            'base_currency_code' => $request->input('base_currency_code', 'USD'),
            'exchange_rate' => $request->input('exchange_rate', 1),
            'admin_base_currency' => $request->input('admin_base_currency', 'USD'),
            'exchange_rate_use_currency_to_admin' => $request->input('exchange_rate_use_currency_to_admin', 1),
            'exchange_rate_merchant_to_admin' => $request->input('exchange_rate_merchant_to_admin', 1),
            'exchange_rate_admin_to_merchant' => $request->input('exchange_rate_admin_to_merchant', 1),
            'formatted_address' => $request->input('formatted_address', ''),
            'driver_id' => $request->input('driver_id', 0),
            'vehicle_id' => $request->input('vehicle_id', 0),
            'assigned_at' => $request->input('assigned_at', now()),
            'assigned_expired_at' => $request->input('assigned_expired_at', now()),
            'date_cancelled' => $request->input('date_cancelled', null),
            'is_view' => $request->input('is_view', 0),
            'is_critical' => $request->input('is_critical', 0),
            'earning_approve' => $request->input('earning_approve', 0),
            'delivered_at' => $request->input('delivered_at', null),
            'request_from' => $request->input('request_from', ''),
            'late_notification_sent' => $request->input('late_notification_sent', 0),
            'preparation_late_sent' => $request->input('preparation_late_sent', 0),
            'delivering_late_sent' => $request->input('delivering_late_sent', 0),
            'retry_attempts' => $request->input('retry_attempts', 0),
            'last_retry' => $request->input('last_retry', null),
            'auto_assign_status' => $request->input('auto_assign_status', 0),
            'date_created' => $request->input('date_created', now()),
            'created_at' => $request->input('created_at', now()),
            'date_modified' => $request->input('date_modified', now()),
            'ip_address' => $request->input('ip_address', $request->ip()),
        ];

        // Create order
        $order = StOrdernew::create($data);

        return response()->json([
            'success' => true,
            'data' => $order
        ], 201);
    }
}
