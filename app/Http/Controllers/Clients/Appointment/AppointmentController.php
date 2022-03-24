<?php

namespace App\Http\Controllers\Clients\Appointment;

use App\CustomClass\MyResponse;
use App\Models\Appointment\Appointment;
use App\Models\Stations\StationDeviceCalendar;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{
    public function create(Request $request){

        $validator = Validator::make($request->all(),[
            'station_device_id' => 'required|numeric',
            'date' => 'required|string',
            'time' => 'required|string',
            'kw' => 'required|numeric'
        ]);

        if ($validator->fails()){
            return MyResponse::error($validator->errors());
        }

        if ($request->date < date('Y-m-d',strtotime(Carbon::now())) && $request->time < date('H:i',strtotime(Carbon::now()))){
            return MyResponse::error('Geçmiş tarihe yönelik rezervasyon oluşturamazsınız!');
        }

        $deviceCalendar = StationDeviceCalendar::where('start_date', '<=', date('d-m-Y',strtotime($request->date)))
            ->where('end_date', '>=', $request->date)
            ->where('station_device_id', $request->station_device_id)
            ->where('status',true)->first();


        if (isset($deviceCalendar)) {

            $startTime = explode(":", $deviceCalendar->start_time);
            $endTime = explode(":", $deviceCalendar->end_time);

            $appointmentControl = Appointment::where('station_device_id', $request->station_device_id)
                ->where('date', $request->date)
                ->pluck('time')
                ->toArray();


            $collection = [];
            for ($i = 0; $i <= ($endTime[0] - $startTime[0]); $i++) {
                if (!in_array(($startTime[0] + $i) . ':00', $appointmentControl)) {
                    $arr[$i] = ($startTime[0] + $i) . ':00';
                }
            }
            dd($collection);
            if ($collection != []) {
                return response()->json(['time' => $collection, 'calendar' => $deviceCalendar]);
            } else {
                return response()->json("");
            }

        } else {
            return response()->json("");
        }

        /*$kw = $request->kw;
        $date = $request->date;
        $startTime = $request->start_time; */



    }
}
