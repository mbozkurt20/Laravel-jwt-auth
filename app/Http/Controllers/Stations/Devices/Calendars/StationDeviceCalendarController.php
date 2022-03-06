<?php

namespace App\Http\Controllers\Stations\Devices\Calendars;

use App\CustomClass\MyResponse;
use App\Models\Stations\StationDevice;
use App\Models\Stations\StationDeviceCalendar;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class StationDeviceCalendarController extends Controller
{
    public function createCalendar(Request $request){
        if ($request->start_date < date('d-m-Y',strtotime(Carbon::now()->toDateString()))){
            return MyResponse::error('Geçmiş tarihe yönelik takvime ekleme yapamazsınız');
        }

        if ($request->start_date > $request->end_date){
            return MyResponse::error('Bitiş tarihiniz, başlangıç tarihinizden önce olamaz');
        }

        if ($request->start_time > $request->end_time){
            return MyResponse::error('Bitiş saatiniz, başlangıç saatinizden önce olamaz');
        }

        if (StationDeviceCalendar::where('station_device_id',$request->station_device_id)->where('start_date','<=',$request->start_date)->where('end_date','>=',$request->start_date)->where('end_time','>=',$request->start_time)->exists()){
            return MyResponse::error('Cihaza ait girilen takvim bilgisi zaten mevcut',400);
        }

        $validator = Validator::make($request->all(),[
            'station_device_id' => 'required|numeric',
            'start_date' => 'required|string',
            'end_date' => 'required|string',
            'start_time' => 'required|string',
            'end_time' => 'required|string'
        ]);

        if ($validator->fails()){
            return MyResponse::error($validator->errors(),400);
        }

        if (! StationDevice::where('id',$request->station_device_id)->exists()){
            return MyResponse::error('Girilen cihaz kimlik numarasına ait bilgi bulunamadı',400);
        }

        try {
            $stationDeviceCalendar = new StationDeviceCalendar();
            $stationDeviceCalendar['author'] = Auth::id();
            $stationDeviceCalendar['station_device_id'] = $request->station_device_id;
            $stationDeviceCalendar['start_date'] = $request->start_date;
            $stationDeviceCalendar['end_date'] = $request->end_date;
            $stationDeviceCalendar['start_time'] = $request->start_time;
            $stationDeviceCalendar['end_time'] = $request->end_time;
            $stationDeviceCalendar->save();

        }catch (\Exception $e){
         Log::info('Takvime ekleme sırasında oluşan sorun='.$e.' //end');
         return MyResponse::error('Takvim ekleme sırasında sistemsel bir hata meydana geldi!');
        }

        return MyResponse::success('Takvime Ekleme Başarılı',$stationDeviceCalendar,201);
    }

    public function calendar($stationDeviceId){
        $stationDevice = StationDevice::where('status',true)->where('station_device_id',$stationDeviceId)->get();
        return MyResponse::success('İstasyon uygunluk takvimi',$stationDevice);
    }
}
