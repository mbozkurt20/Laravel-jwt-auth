<?php

namespace App\CustomClass;

use Illuminate\Support\Facades\Auth;

class Log {

   public static function create($type,$data){
        $log = new \App\Models\Log();
        $log->author = Auth::id();
        $log->type = $type;
        $log->data = collect($data);
        $log->save();
    }


}
