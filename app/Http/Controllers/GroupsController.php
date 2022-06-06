<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GroupsController extends Controller{
    
    public function groupsGenerator(){
        $array = array("Harry","Ross",
        "Bruce","Cook",
        "Carolyn","Morgan",
        "Albert","Walker",
        "Randy","Reed",
        "Larry","Barnes",
        "Lois","Wilson",
        "Jesse","Campbell",
        "Ernest","Rogers",
        "Theresa","Patterson",
        "Henry","Simmons",
        "Michelle","Perry",
        "Frank","Butler",
        "Shirley");
    
        $teams = array();
        
        while(sizeof($array) >1){
            $temp = array();
            for($i = 0; $i<2; $i++){
                $rand = rand(0, sizeof($array)-1);
                $temp[] = $array[$rand];
                
                array_splice($array, $rand, 1);

            }
            $teams[] = $temp;
        }
        
        if(sizeof($array) > 0){
            $teams[] = array($array[0]);
        }
        // echo(json_encode($teams));

        return response()->json([
            "status" => "Success",
            "teams" => $teams
        ], 200);
    }
}
