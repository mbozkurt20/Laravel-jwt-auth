<?php

namespace App\Http\Controllers\NoSession;

use App\CustomClass\MyResponse;
use App\Models\Appointment\Appointment;
use App\Models\Stations\Station;
use App\Models\Stations\StationDevice;
use App\Models\Stations\StationDeviceCalendar;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\Complexity\Calculator;
use function App\CustomClass\deviceTimeCalculator;
use function Map\distance;

class NoSessionController extends Controller
{
    public function stations()
    {
        $stations = Station::where('status', true)->with('devices')->get();

        /*$data = [];
        foreach ($stations as $station){
            $station->whereHas('devices',function ($device){
                $device->where('status',true);


                $device->whereHas('calendars',function (){

                    $deviceCalendar = StationDeviceCalendar::where('start_date', '<=', date('d-m-Y',strtotime($request->date)))
                        ->where('end_date', '>=', $request->date)
                        ->where('station_device_id', $request->station_device_id)
                        ->where('status',true)->first();

                });
            })->get();
        } */

        return MyResponse::success('İstasyonlar Listesi', $stations);
    }


    public function stationDeviceCalendarStatus($deviceId){

        $device = StationDevice::where('id',$deviceId)->where('status',true);

        if (! $device->exists()){
            return MyResponse::error('Cihaz bulunamadı veya şuan hizmet verememektedir.',400);
        }

        $deviceTotalCapacity = $device->first()->capacity;
        $capacitySpentToday = Appointment::where('station_device_id',$deviceId)->where('date',date('Y-m-d',time()))->sum('kw');

        if ($deviceTotalCapacity <= $capacitySpentToday + 1){ //günlük kapasitenin tamamlamasına 1 kw kala rezervasyona kapatılıyor.
            return MyResponse::error('Bu cihaz bugün ki kapasitesini doldurduğundan rezervasyon verememektedir.');
        }

        $today = date('Y-m-d', time());
        if (! StationDeviceCalendar::where('station_device_id', $deviceId)->where('end_date','>=', $today)->exists()){
            return MyResponse::error('Bu cihazın bugün için uygunluk takvimi bulunmamaktadır.');
        }

        $todayCalendar = StationDeviceCalendar::where('station_device_id', $deviceId)->where('end_date','>=', $today)->first();


        //kontrol takvime göre bakılacak ve appointmentte olmayan saatler getirilecek.

        if (isset($todayCalendar)) {
            $deviceAppointmentTime = Appointment::where('station_device_id', $deviceId)
                ->where('date', $today)
                ->pluck('time','kw')
                ->toArray();

            $fullOfTimes = [];
            foreach ($deviceAppointmentTime as $kw => $time){
                array_push($fullOfTimes,$time.'-'.date('H:i',strtotime(Carbon::create($time)->addMinute(deviceTimeCalculator($deviceId,$kw)))));
            }

            $freeOfTimes = [];

            $start = explode(":", $todayCalendar->start_time);
            $finish = explode(":", $todayCalendar->end_time);

            $deviceAppointment = Appointment::where('station_device_id',$deviceId);

            return MyResponse::success('Cihazın dolu ve boş olduğu zaman aralıkları',['fullOfTimes' => $fullOfTimes]);

        } else {
            return response()->json(['success' => false, 'message' => 'Seçilen tarihte bu cihaz için uygunluk bulunamadı'], 400);
        }
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
