<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RandomBeerController extends Controller{
    
    public function randomBeer(){
        $response = Http::get('https://api.punkapi.com/v2/beers');
        $data = json_decode($response);
        $random = rand(0, sizeof($data)-1);
        return response()->json([
            "status" => "Success",
            "result" => $data[$random]
        ], 200);
    }
}
