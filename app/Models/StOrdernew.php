<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StOrdernew extends Model
{
    protected $table = 'st_ordernew';

    protected $fillable = [
        'order_id', 'order_uuid', 'order_reference', 'merchant_id', 'client_id',
        'status', 'payment_status', 'delivery_status', 'service_code', 'payment_code',
        'total_discount', 'points', 'sub_total', 'sub_total_less_discount', 'service_fee',
        'small_order_fee', 'delivery_fee', 'packaging_fee', 'card_fee', 'tax_type',
        'tax', 'tax_total', 'courier_tip', 'total', 'amount_due', 'wallet_amount',
        'promo_code', 'promo_total', 'promo_cap', 'promo_owner', 'offer_discount',
        'offer_total', 'offer_cap', 'whento_deliver', 'delivery_date', 'delivery_time',
        'delivery_date_time', 'delivery_time_end', 'order_accepted_at',
        'preparation_time_estimation', 'pickup_time', 'delivery_time_estimation',
        'commission_type', 'commission_value', 'commission_based', 'commission',
        'merchant_earning', 'total_original', 'commission_original',
        'merchant_earning_original', 'adjustment_commission', 'adjustment_total',
        'use_currency_code', 'base_currency_code', 'exchange_rate',
        'admin_base_currency', 'exchange_rate_use_currency_to_admin',
        'exchange_rate_merchant_to_admin', 'exchange_rate_admin_to_merchant',
        'formatted_address', 'driver_id', 'vehicle_id', 'assigned_at',
        'assigned_expired_at', 'date_cancelled', 'is_view', 'is_critical',
        'earning_approve', 'delivered_at', 'request_from', 'late_notification_sent',
        'preparation_late_sent', 'delivering_late_sent', 'retry_attempts',
        'last_retry', 'auto_assign_status', 'date_created', 'created_at',
        'date_modified', 'ip_address'
    ];

    public $timestamps = false;
}
