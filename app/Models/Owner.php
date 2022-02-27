<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model

{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'created_at',
    ];

    public $timestamps = false;
    
    public function imobils()
    {
        return $this->hasMany(Imobil::class);
    }

    


}
