<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PalindromesController extends Controller{
    
    public function palindromes(){
        $count = 0;
        $array = array('aa', 'ab', 'aba', 'abc');

        foreach ($array as $value) {
            $flag = true;
            for($i = 0; $i < strlen($value)/2; $i++){
                if($value[$i] != $value[strlen($value)-$i-1]){
                    $flag = false;
                    break;
                }
            }
            if($flag == true){
                $count++;
            }
        }
        return response()->json([
            "status" => "Success",
            "count" => $count
        ], 200);
    }
}
