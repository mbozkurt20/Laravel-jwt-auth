<?php

namespace App\CustomClass;

use App\Models\Appointment\Appointment;
use App\Models\Stations\StationDevice;
use App\Models\Stations\StationDeviceCalendar;

function price($deviceId,$startTime,$endTime)
{
    $dateTimeObject1 = date_create($startTime);
    $dateTimeObject2 = date_create($endTime);

    $difference = date_diff($dateTimeObject1, $dateTimeObject2);
    $minutes = $difference->days * 24 * 60;
    $minutes += $difference->h * 60;
    $minutes += $difference->i;

    $stationDevice = StationDevice::find($deviceId);
    $stationDeviceMin = $stationDevice->minute;
    // $stationkw = $station->calculator->kw;
    $stationDevicePrice = $stationDevice->price;

    $price = $minutes * $stationDeviceMin * $stationDevicePrice;
    return $price;
}

function calendar($station_device_id,$date){
    $calendar = StationDeviceCalendar::where('start_date', '<=', $date)
        ->where('end_date', '>=', $date)->where('station_device_id', $station_device_id)->first();

    if (isset($calendar)) {
        $start = explode(":", $calendar->start_time);
        $finish = explode(":", $calendar->end_time);
        $control = Appointment::where('station_device_id', $station_device_id)
            ->where('date', $date)
            ->pluck('time')
            ->toArray();
        $arr = [];
        for ($i = 0; $i <= ($finish[0] - $start[0]); $i++) {
            if (!in_array(($start[0] + $i) . ':00', $control)) {
                $arr[$i] = ($start[0] + $i) . ':00';
            }
        }
        if ($arr != []) {
            return response()->json(['time' => $arr, 'calendar' => $calendar]);
        } else {
            return response()->json("");
        }

    } else {
        return response()->json("");
    }
}
