<?php

namespace App\Http\Controllers\Stations\Devices;

use App\CustomClass\Log;
use App\CustomClass\MyResponse;
use App\Models\Stations\Station;
use App\Models\Stations\StationDevice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class StationDeviceController extends Controller
{
    public function devices($stationId){
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

        $code = substr($station->name, 0, 3) . '-' . 'device-' . rand(1000, 9000);
        $stationDevice = new StationDevice();
        $stationDevice['author'] = Auth::id();
        $stationDevice['station_id'] = $request->station_id;
        $stationDevice['code'] = $code;
        $stationDevice['price'] = $request->price;
        $stationDevice['minute'] = 1;
        $stationDevice['kw'] = $request->kw;
        $stationDevice['capacity'] = $request->capacity;
        $stationDevice->save();

        Log::create('station-device-create',$stationDevice);

        return MyResponse::success('İstasyona ait cihaz başarıyla oluşturuldu', $stationDevice, 201);
    }

    public function updateDevice(Request $request,$deviceId)
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

        $code = substr($station->name, 0, 3) . '-' . 'device-' . rand(1000, 9000);

        $stationDevice = StationDevice::find($deviceId);
        $stationDevice['author'] = Auth::id();
        $stationDevice['station_id'] = $request->station_id;
        $stationDevice['code'] = $code;
        $stationDevice['price'] = $request->price;
        $stationDevice['minute'] = 1;
        $stationDevice['kw'] = $request->kw;
        $stationDevice['capacity'] = $request->capacity;
        $stationDevice->update();

        Log::create('station-device-update',$stationDevice);

        if ($stationDevice){
            return MyResponse::success('İstasyona ait cihaz başarıyla oluşturuldu', $stationDevice, 201);
        }else{
            MyResponse::error('İstasyon cihazı güncellemesi yapılamadı',400);
        }
    }
}
