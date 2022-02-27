<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
    'imobil_id',
    'street',
    'house_nr',
    'apart_nr',
    'city',
    ];
    
    public function imobil()
    {
       
    
        return $this->belongsTo(Imobil::class);
    }



}
