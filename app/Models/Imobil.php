<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LoggableInterface;




class Imobil extends Model implements LoggableInterface
{      
    use HasFactory;
    protected $fillable = [
        'owner_id',
        'type',
        'price',
        'rooms_nr',
        'building_type',
        'square_mp',
        'floor',
        'bath',
        'balcony',   
        'created_at',
        // 'view_count',
    ];

    // public $timestamps = false;
    
    public function address()
    {
        return $this->hasOne(Address::class);
    }
    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function benefits()
    {
        return $this->belongsToMany(Benefit::class, 'imobil_to_benefit');
    }

    public function order()
    {
        return $this->hasOne(Order::class);
    }

     public function convertToLoggableString():string
    {
        return "Imobil with id {$this->id}";
    }

    public function convertToTestString():string
    {
        return "imobil with {$this->description}";
    }

    public function getData(): array
    {
        return [
            'id' => $this->id,
            'type' =>$this->type,
            'price' =>$this->price,
            'rooms_nr' =>$this->rooms_nr
            
        ];
    }
}


