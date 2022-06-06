<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ResponseTextController extends Controller{
    
    public function responseText(){
        $response = Http::get('https://icanhazdadjoke.com/slack');
        $data = json_decode($response);
        
        return response()->json([
            "status" => "Success",
            "text" => $data->attachments[0]->text
        ], 200);
    }
}
