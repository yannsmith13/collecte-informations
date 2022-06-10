<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'history',
        'offer_presentation',
        'offer_prices',
        'offer_qualities',
        'target_audience',
        'society_moral',
        'offer_list',
        'activity_area',
    ];

    // RELATIONSHIPS
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
