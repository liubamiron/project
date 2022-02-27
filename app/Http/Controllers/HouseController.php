<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imobil;
use App\Services\ModelLogger;

class HouseController extends Controller{
    public function index() { 
        $request = request()->all(); 

        $roomsnr = $request['rooms'] ?? '';
        $imobils;  

        if($roomsnr === ''){
            $imobils = Imobil::select()->where('type', '=', 'HOUSE')->paginate(7);
        }
        else{
            $imobils = Imobil::select()->where('rooms_nr', '=', $roomsnr) 
                                        ->where( 'type', '=', 'HOUSE')->paginate(7);
        }

        $rooms = Imobil::select('rooms_nr')->distinct()->get();

        return view('imobils.imobil', ['imobils' => $imobils, 'rooms' => $rooms, 'roomsnr' => $roomsnr]);     
    }
       
}

