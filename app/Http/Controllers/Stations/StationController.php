<?php

namespace App\Http\Controllers\Stations;

use App\CustomClass\Log;
use App\CustomClass\MyResponse;
use App\Models\Appointment\Appointment;
use App\Models\Stations\Station;
use App\Models\Stations\StationDevice;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use function DateFormat\timeConvert;
use function Map\distance;

class StationController extends Controller
{
    public function stations()
    {
        $stations = Station::where('status', true)->where('author',Auth::id())->get();
        return MyResponse::success(Auth::user()->full_name.' ait istasyonlar listelendi',$stations);
    }

    public function createStation(Request $req)
    {

        $validator = Validator::make($req->all(), [
            'name' => 'required|unique:stations',
            'description' => 'required|string',
            'latitude' => 'required',
            'longitude' => 'required',
            'address' => 'required|string'
        ]);

        if ($validator->fails()) {
            return MyResponse::error($validator->errors(), 400);
        }


        $station = new Station();
        $station['author'] = Auth::id();
        $station['name'] = $req->name;
        $station['code'] = \CodeGenerator\Station($req->name);
        $station['latitude'] = $req->latitude;
        $station['longitude'] = $req->longitude;
        $station['phone'] = $req->phone;
        $station['description'] = $req->description;
        $station['address'] = $req->address;

        if ($req->hasFile('image')) {
            $image = $req->image;
            $imageName = time() . '-' . Str::slug($req->name) . '.' . $image->extension();
            $image->move(storage_path('app/public/stations/'), $imageName);
            $station['image'] = asset('storage/stations/'.$imageName);
        }

        $station->save();
        Log::create('station-create',$station);

        return MyResponse::success('Successfully create new station', $station, 201);
    }

    public function updateStation(Request $req,$stationId)
    {

        if (! Station::where('id',$stationId)->where('author',Auth::id())->exists()){
            return MyResponse::error('Size ait olmayan istasyon için işlem yapamazsınız!',401);
        }

        if (! Station::where('id',$stationId)->where('status',true)->exists()){
            return MyResponse::error('İstasyonunuz aktif görünmüyor, lütfen aktif hale getirdikten sonra tekrar deneyiniz.',400);
        }

        $validator = Validator::make($req->all(), [
            'name' => 'required',
            'description' => 'required|string',
            'latitude' => 'required',
            'longitude' => 'required',
            'address' => 'required|string',
        ]);

        if ($validator->fails()) {
            return MyResponse::error($validator->errors(), 400);
        }

        $station = Station::find($stationId);
        $station['author'] = Auth::id();
        $station['name'] = $req->name;
        $station['code'] = $station->code;
        $station['phone'] = $req->phone;
        $station['latitude'] = $req->latitude;
        $station['longitude'] = $req->longitude;
        $station['description'] = $req->description;
        $station['address'] = $req->address;

        if ($req->hasFile('image')) {
            $image = $req->image;
            $imageName = time() . '-' . Str::slug($req->name) . '.' . $image->extension();
            $image->move(storage_path('app/public/stations/'), $imageName);
            $station['image'] =  asset('storage/stations/'.$imageName);
        }

        $station->update();
        Log::create('station-update',$station);

        if ($station){
            return MyResponse::success('İstasyon başarıyla güncellendi', $station, 201);
        }else{
            MyResponse::error('İstasyon güncellemesi yapılamadı',400);
        }
    }

    public function statusStation($stationId){

        if (! Station::where('id',$stationId)->where('author',Auth::id())->exists()){
            return MyResponse::error('Size ait olmayan istasyon için işlem yapamazsınız!',401);
        }

        $station = Station::find($stationId);
        if ($station->status == true){
            $station->status = false;
            $station->update();
        }else{
            $station->status = true;
            $station->update();
        }

        Log::create('station-status',$station);

        return MyResponse::success('İstasyon Durumu Güncellendi',$station,200);
    }

    public function trackingDevice($stationId){
        $authId = Auth::id();
        if (! Station::where('id',$stationId)->where('author',$authId)->exists()){
            return MyResponse::error('Bu istasyon size ait değil.',401);
        }

        $station = Station::find($stationId);
        $stationDevicesIds = $station->devices->pluck('id')->toArray();
        $results = Appointment::whereIn('station_device_id',$stationDevicesIds)->orderByDesc('date')->with('userData')->get();

        $data = [];
        foreach ($results as $result){
            $device = StationDevice::find($result->station_device_id);
            $betweenTime = ceil($result->kw / $device->kw);
            $startTime = $result->time;
            $endTime = date('H:i',strtotime(Carbon::create($startTime)->addMinute($betweenTime)));
            $startTime = date('H:i',strtotime($startTime));

            $item =   [
                'userName' => $result->userData->full_name,
                'time' => timeConvert($result->created_at),
                'timeBetween' => $startTime.'-'.$endTime,
                'used_kw' => $result->kw,
                'device_code' => $device->code,
                'status' => $result->status,
                'deviceDetail' => $results
            ];

            array_push($data,$item);
        }

        return MyResponse::success('İstasyona ait müşteri takip bilgileri', $data);

    }
}
