<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reason extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
    ];


    // RELATIONSHIPS
    public function customers()
    {
        return $this->belongsToMany(Customer::class);
    }
}
