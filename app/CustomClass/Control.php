<?php

namespace App\CustomClass;

class Control{

    public static function passwordControl($password){

        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);


        if($uppercase == 0 || $lowercase == 0 || $number == 0 || $specialChars == 0) {
            return false;
        }else{
            return true;
        }
    }

}

