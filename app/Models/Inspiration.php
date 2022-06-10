<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inspiration extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'description', // nullable
    ];

    // RELATIONSHIPS
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
