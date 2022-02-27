<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imobil;
use App\Models\Benefit;
use App\Services\ModelLogger;
use Psr\Log\LoggerInterface;
use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Support\Arr;




class ItemController extends Controller
{
   
  public function index($imobilId, Request $request, ModelLogger $logger) 
    { 
        $imobil= Imobil::findOrFail($imobilId);

     // $logger->logModelItem($user = $request->user(), $imobil);

        $logger->logModel($user = $request->user(), $imobil);

         dump($imobil->benefits);
        
        $benefit;
        $benefit = Benefit::all();

      //   //Get single array value from eloquent collection using toArray() method on first()
      // Benefit::get('name', function(){
      //         $benefit = App\Models\Benefit::first()->toArray();
      //         return view('array', compact('name'));
      //                                               });


                                                                    



        return view('imobils.itempage', ['imobil' => $imobil, 'benefit' => $benefit[0]]);        
    }

    

}