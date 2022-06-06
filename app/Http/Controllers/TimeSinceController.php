<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TimeSinceController extends Controller{
    
    public function timesince(){
       $today = strtotime(date('Y-m-d'));
       $since = strtotime('1732-04-14');
        return response()->json([
            "status" => "Success",
            "elpased" => $today-$since
        ], 200);
    }
}
