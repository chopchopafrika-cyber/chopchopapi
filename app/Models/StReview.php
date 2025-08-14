<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StReview extends Model
{
    protected $table = 'st_review';

    protected $fillable = [
        'merchant_id',
        'client_id',
        'driver_id',
        'review',
        'rating',
        'status',
        'date_created',
        'ip_address',
        'order_id',
        'parent_id',
        'reply_from',
        'date_modified',
        'as_anonymous'
    ];

    protected $casts = [
        'merchant_id' => 'integer',
        'client_id' => 'integer',
        'driver_id' => 'integer',
        'order_id' => 'integer',
        'parent_id' => 'integer',
        'rating' => 'float',
        'date_created' => 'datetime',
        'date_modified' => 'datetime',
        'as_anonymous' => 'boolean',
    ];

    public $timestamps = false; // database handles timestamps
}
