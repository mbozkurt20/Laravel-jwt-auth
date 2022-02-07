<?php

namespace App\Http\Controllers\Stations;

use App\CustomClass\MyResponse;
use App\Models\Stations\Station;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StationController extends Controller
{
    public function stations(){
        $stations = Station::where('status',true)->with('introduction')->get();
        foreach ($stations as $station){
            $station['image'] = asset('storage/stations/'.$station->image);
        }
        return MyResponse::success('Stations successfully listed',$stations,200);
    }

}
