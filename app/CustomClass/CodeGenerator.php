<?php

namespace CodeGenerator;


use App\Models\Stations\Station;
use App\Models\Stations\StationDevice;

function Station($stationName){

    $firstString = strtoupper(substr($stationName,0,3));
    $number = rand(11111,99999);
    $result = 'S-'.$firstString.'-'.$number;

    if (Station::where('code',$result)->exists()){
        $number = rand(11111,99999);
        $result = 'S-'.$firstString.'-'.$number;
    }

    return $result;

}

function Device($stationId){

    $number = rand(11111,99999);
    $result = 'S'.$stationId.'-D-'.$number;

    if (StationDevice::where('code',$result)->exists()){
        $number = rand(11111,99999);
        $result = 'S'.$stationId.'-D-'.$number;
    }

    return $result;

}
