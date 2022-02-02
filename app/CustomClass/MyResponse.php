<?php

namespace App\CustomClass;

use Illuminate\Support\Facades\Response;

class MyResponse{

    public static function success($message = null, $data = null,$code = 200){
        return response()->json(['status' => true,'message' => $message,'data' => $data],$code);
    }


    public static function error($message = null,$code = 400){
        return response()->json(['status' => false,'message' => $message],$code);
    }

}

