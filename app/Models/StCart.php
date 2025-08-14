<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StCart extends Model
{
    protected $table = 'st_cart';

    protected $fillable = [
        'cart_row',
        'cart_uuid',
        'merchant_id',
        'cat_id',
        'item_token',
        'item_size_id',
        'qty',
        'special_instructions',
        'if_sold_out',
        'hold_order',
        'order_reference',
        'hold_order_reference',
        'transaction_type',
        'table_uuid',
        'subtotal',
        'total',
        'currency_code',
        'send_order',
        'is_view',
        'payment_status',
        'change_trans',
        'date_created',
        'date_modified',
        'ip_address'
    ];

    protected $casts = [
        'id' => 'integer',
        'cart_row' => 'integer',
        'merchant_id' => 'integer',
        'cat_id' => 'integer',
        'item_size_id' => 'integer',
        'qty' => 'integer',
        'subtotal' => 'float',
        'total' => 'float',
        'send_order' => 'boolean',
        'is_view' => 'boolean',
        'date_created' => 'datetime',
        'date_modified' => 'datetime'
    ];

    public $timestamps = false; // manual timestamps
}
