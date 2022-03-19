<?php

namespace App\Http\Controllers\Stations\Devices;

use App\CustomClass\Log;
use App\CustomClass\MyResponse;
use App\Models\Appointment\Appointment;
use App\Models\Stations\Station;
use App\Models\Stations\StationDevice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use function CodeGenerator\Device;
use function Time\convert;
use function Time\timeConvert;
use function Time\turkishDateFormat;

class StationDeviceController extends Controller
{
    public function devices($stationId){

        if (! Station::where('id',$stationId)->where('author',Auth::id())->exists()){
            return MyResponse::error('Size ait olmayan bir istasyonun cihazlarına erişemezsiniz!',401);
        }

        $devices = StationDevice::where('status',true)->select('id','station_id','code','capacity','price','kw')->get();
        $stationName = Station::find($stationId)->name;
        return MyResponse::success($stationName.'İstasyonuna ait cihazlar başarıyla listelendi',$devices);
    }

    public function createDevice(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'station_id' => 'required|numeric',
            'capacity' => 'numeric|required',
            'price' => 'required|numeric',
            'kw' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            return MyResponse::error($validator->errors(), 400);
        }

        $station = Station::find($request->station_id);

        if ($station->author != Auth::id()){
            return MyResponse::error('Size ait olmayan bir istasyona cihaz ekleyemezsiniz!',401);
        }

        $stationDevice = new StationDevice();
        $stationDevice['author'] = Auth::id();
        $stationDevice['station_id'] = $request->station_id;
        $stationDevice['code'] = Device($station->id);
        $stationDevice['price'] = $request->price;
        $stationDevice['minute'] = 1;
        $stationDevice['kw'] = $request->kw;
        $stationDevice['capacity'] = $request->capacity;
        $stationDevice['energy_type'] = $request->energy_type;
        $stationDevice->save();

        Log::create('station-device-create',$stationDevice);

        return MyResponse::success('İstasyona ait cihaz başarıyla oluşturuldu', $stationDevice, 201);
    }

    public function updateDevice(Request $request,$deviceId)
    {

        if (! StationDevice::where('id',$deviceId)->exists()){
            return MyResponse::error('Bu kimliğe ait bir cihaz bulunmamaktadır',400);
        }

        $device = StationDevice::find($deviceId);

        if (! (Station::where('id',$device->station_id)->where('author',Auth::id())->exists() || StationDevice::where('id',$deviceId)->where('author',Auth::id())->exists())){
            return MyResponse::error('İşlem yapmak istediğiniz cihaz veya cihazın istasyonu size ait görünmüyor!',401);
        }

        $validator = Validator::make($request->all(), [
            'capacity' => 'numeric|required',
            'price' => 'required|numeric',
            'kw' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            return MyResponse::error($validator->errors(), 400);
        }

        $stationDevice = StationDevice::find($deviceId);
        $stationDevice['author'] = Auth::id();
        $stationDevice['code'] = $stationDevice->code;
        $stationDevice['price'] = $request->price;
        $stationDevice['minute'] = 1;
        $stationDevice['kw'] = $request->kw;
        $stationDevice['capacity'] = $request->capacity;
        $stationDevice['energy_type'] = $request->energy_type;
        $stationDevice->update();

        Log::create('station-device-update',$stationDevice);

        if ($stationDevice){
            return MyResponse::success('İstasyona ait cihaz başarıyla oluşturuldu', $stationDevice, 201);
        }else{
            MyResponse::error('İstasyon cihazı güncellemesi yapılamadı',400);
        }
    }

    public function statusDevice($deviceId){

        if (! StationDevice::where('id',$deviceId)->exists()){
            return MyResponse::error('Bu kimliğe ait bir cihaz bulunmamaktadır',400);
        }

        $device = StationDevice::find($deviceId);

        if (! (Station::where('id',$device->station_id)->where('author',Auth::id())->exists() || StationDevice::where('id',$deviceId)->where('author',Auth::id())->exists())){
            return MyResponse::error('İşlem yapmak istediğiniz cihaz veya cihazın istasyonu size ait görünmüyor!',401);
        }

        if ($device->status == true){
            $device->status = false;
            $device->update();
        }else{
            $device->status = true;
            $device->update();
        }

        Log::create('device-status',$device);

        return MyResponse::success('Cihaz Durumu Güncellendi',$device,200);
    }

    public function trackingDevice($deviceId){

        if (! StationDevice::where('id',$deviceId)->exists()){
            return MyResponse::error('Bu kimliğe ait bir cihaz bulunmamaktadır',400);
        }

        $device = StationDevice::find($deviceId);
        $authId = Auth::id();

        if (! (Station::where('id',$device->station_id)->where('author',$authId)->exists() || StationDevice::where('id',$deviceId)->where('author',$authId)->exists())){
            return MyResponse::error('İşlem yapmak istediğiniz cihaz veya cihazın istasyonu size ait görünmüyor!',401);
        }

        $results = Appointment::where('station_device_id',$deviceId)->orderByDesc('date')->with('userData')->get();
        $data = [];
        foreach ($results as $result){
            $item =   [
                'userName' => $result->userData->full_name,
                'time' => timeConvert($result->created_at),
                'timeBetween' => $result->start_time.'-'.$result->end_time,
                'status' => $result->status,
                'deviceDetail' => $results
            ];

            array_push($data,$item);
        }

        return MyResponse::success('Cihaza ait müşteri takip bilgileri', $data);

    }

}
