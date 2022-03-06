<?php

namespace App\Http\Controllers\Users;

use App\CustomClass\MyResponse;
use App\Models\Appointment\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function pastAppointment(){

        $datas = Appointment::where('user_id',Auth::id())->get();
        return MyResponse::success('Past Appointment List',$datas,200);
    }
}
