<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Imobil;
use Illuminate\Http\Request;
use App\Services\ModelLogger;


class ImobilApiController extends Controller
{
    public function readMostPopular(Request $request, ModelLogger $logger)
    {
        // $mostPopularImobils = Imobil::all()
        // ->sortByDesc('view_count')
        // ->take($imobilCount = 10);

        $imobilArray = [];
        foreach ($mostPopularImobils as $imobil) {
            // $imobilsArray[] = $imobil->toJson();
            $imobilsArray[] = [
                'id' => $imobil->id,
                'type' => $imobil->type,
                'price' => $imobil->price,
                'floor' => $imobil->floor,
                'owner_id' =>$imobil->owner_id,
                'balcony' =>$imobil->balcony,
                'rooms_nr'=> $imobil->rooms_nr,
                'building_type'=> $imobil->building_type,
                'square_mp'=> $imobil->square_mp,
                'created_at'=> $imobil->created_at,
                //'view_count' => $imobil->view_count,               
            ];
        }

        // echo '[' .implode(',' , $articlesArray) . ']';
        echo json_encode($imobilsArray);
    }

    public function readAll()
    {
        $allImobils = Imobil::all()
        ->sortByDesc('id');

        $imobilArray = [];
        foreach ($allImobils as $imobil) {
            $imobilsArray[] = [
                'imobil' => $imobil->id,
                'type' => $imobil->type,
                'price' => $imobil->price,
                // 'view_count' => $imobil->view_count,
            ];
        }

        echo json_encode($imobilsArray);
    }
    
    public function readOne($id)
    {
        $imobil = Imobil::find($id);
        echo json_encode($imobil);
    }

    public function postNew()
    {
    $client = new Imobil("own.allrent.com");
    $response = $client->post(
     "products",
    [
    "product" => [
      "title" => "Appartment in Chisinau",
      "body_html" => "<strong>Good 2 rooms appartment!</strong>",
      "vendor" => "Burton",
      "product_type" => "Appartment",
        ]
    ]
        );
    }

    public function readType(Request $request, ModelLogger $logger)
    {
        // $mostPopularImobils = Imobil::all()
        // ->sortByDesc('view_count')
        // ->take($imobilCount = 10);

        $imobilArray = [];
        foreach ($mostPopularImobils as $imobil) {
            // $imobilsArray[] = $imobil->toJson();
            $imobilsArray[] = [
                'id' => $imobil->id,
                'type' => $imobil->type,
                'price' => $imobil->price,
                'floor' => $imobil->floor,
                'owner_id' =>$imobil->owner_id,
                'balcony' =>$imobil->balcony,
                'rooms_nr'=> $imobil->rooms_nr,
                'building_type'=> $imobil->building_type,
                'square_mp'=> $imobil->square_mp,
                'created_at'=> $imobil->created_at,
                // 'view_count' => $imobil->view_count,               
            ];
        }

        // echo '[' .implode(',' , $articlesArray) . ']';
        echo json_encode($imobilsArray);
    }


}