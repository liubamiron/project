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

// for city filter       
        $cities = Address::select('city')->distinct()->get();

        $city = $request['city'] ?? '';

        // $city = $request['city'] ?? $cities->first()->id;

        // if($citiesname === ''){
        //     $imobils = Imobil::select()->where('type', '=', 'APPARTMENT')->paginate(7);
        // }
        // else{
        //     $imobils = Imobil::select()->where('city', '=', $citiesname) 
        //                                 ->where( 'type', '=', 'APPARTMENT')->paginate(7);
        // }
        $benefit = Benefit::all();


    //     return view('imobils.imobil', ['imobils' => $imobils, 'benefit' => $benefit, 
    //     'roomsnr' => $roomsnr, 'rooms' => $rooms, 'filter' => [
    //         'rooms' =>$rooms, ]]);           
    // }

    return view('imobils.imobil',
    ['imobils' => $imobils,
    'benefit' => $benefit, 
    'roomsnr' => $roomsnr,
    'rooms' => $rooms,
'cities' => $cities,
'city' => $city,
'filter' => ['city' => $city,]]);           
}

    
    
}
