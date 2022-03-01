<?php

namespace App\Http\Controllers;

use App\Models\Imobil;
use App\Models\Benefit;
use App\Models\Owner;
use App\Models\Address;
use Illuminate\Http\Request;
use App\Services\ModelLogger;

class ApartmentController extends Controller {
         
    public function index() { 
        $request = request()->all();  
             
        
        $roomsnr = $request['rooms'] ?? '';
        $imobils;  
                

        if($roomsnr === ''){
            $imobils = Imobil::select()->where('type', '=', 'APPARTMENT')->paginate(7);
        }
        else{
            $imobils = Imobil::select()->where('rooms_nr', '=', $roomsnr) 
                                        ->where( 'type', '=', 'APPARTMENT')->paginate(7);
        }

        $rooms = Imobil::select('rooms_nr')->distinct()->get();

        $benefit = Benefit::all();

    return view('imobils.imobil',
    ['imobils' => $imobils,
    'benefit' => $benefit, 
    'roomsnr' => $roomsnr,
    'rooms' => $rooms]);           
}

    
    
}
