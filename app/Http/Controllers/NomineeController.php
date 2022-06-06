<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class NomineeController extends Controller{
    
    public function nomineeSelector(Request $request){
        $students = $request->input("students");
        $rand = rand(0, count($students)-1);

        return response()->json([
            "status" => "Success",
            "nominee" => $students[$rand]
        ], 200);
    }
}
