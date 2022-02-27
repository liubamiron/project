<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'imobil_id',
        'reserved_start_date',
        'reserved_end_date',
    ];


    public function imobil()
    {
        return $this->belongsTo(Imobil::class);
    }
    
    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
    
    
}
