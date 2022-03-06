<?php

namespace App\Http\Controllers\NoSession;

use App\CustomClass\MyResponse;
use App\Models\Appointment\Appointment;
use App\Models\Stations\Station;
use App\Models\Stations\StationDeviceCalendar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use function Map\distance;

class NoSessionController extends Controller
{
    public function stations()
    {
        $stations = Station::where('status', true)->with(['devices'])->get();
        return MyResponse::success('İstasyonlar Listesi', $stations);
    }

    public function stationsByDistance(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'distance_km' => 'required',
            'latitude'=> 'required',
            'longitude' => 'required'
        ]);

        if ($validator->fails()){
            return MyResponse::error($validator->errors());
        }

        $stations = Station::where('status', true)->get();
        $lat1 = $request->latitude;
        $long1 = $request->longitude;
        $stationData = [];
        foreach ($stations as $station) {
            $lat2 = $station->latitude;
            $long2 = $station->longitude;
            $output = distance($lat1, $lat2, $long1, $long2);

            if ($output['distance'] <= $request->distance) {
                array_push($stationData, $station);
            }
        }
        return MyResponse::success($request->distance_km .' km mesafeye göre listelenen istasyonlar ', $stationData);
        // $output =   between($lat1,$lat2,$long1,$long2);
        // $km = $output['distance'];
        // $time = $output['time'];

    }
}
