<?php

namespace App\Http\Controllers\Clients\Appointment;

use App\CustomClass\MyResponse;
use App\Models\Appointment\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{
    public function create(Request $request){
        $validator = Validator::make($request->all(),[
            'station_device_id' => 'required|numeric',
            'date' => 'required|string',
            'start_time' => 'required|string',
            'end_time' => 'required|string'
        ]);

        if ($validator->fails()){
            return MyResponse::error($validator->errors());
        }


        $appointment = new Appointment();

    }
}
