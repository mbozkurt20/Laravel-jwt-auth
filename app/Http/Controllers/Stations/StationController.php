<?php

namespace App\Http\Controllers\Stations;

use App\CustomClass\Log;
use App\CustomClass\MyResponse;
use App\Models\Stations\Station;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
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
            'latitude' => 'required',
            'name' => 'required|unique:stations',
            'longitude' => 'required',
            'description' => 'required|string'
        ]);

        if ($validator->fails()) {
            return MyResponse::error($validator->errors(), 400);
        }

        $code = Str::slug(substr($req->name, 0, 5) . '-' . substr($req->latitude, 0, 3) . '-' . substr($req->longitude, 0, 3)) . rand(1950, 2022);

        $station = new Station();
        $station['author'] = Auth::id();
        $station['name'] = $req->name;
        $station['code'] = $code;
        $station['phone'] = $req->phone;
        $station['latitude'] = $req->latitude;
        $station['longitude'] = $req->longitude;
        $station['description'] = $req->description;

        if ($req->hasFile('image')) {
            $image = $req->image;
            $imageName = time() . '-' . Str::slug($req->name) . '.' . $image->extension();
            $image->move(storage_path('app/public/stations/'), $imageName);
            $station['image'] = $imageName;
        }

        $station->save();
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
            'latitude' => 'required',
            'name' => 'required',
            'longitude' => 'required',
            'description' => 'required|string'
        ]);

        if ($validator->fails()) {
            return MyResponse::error($validator->errors(), 400);
        }

        $station = Station::find($stationId);
        Log::create('station-update',$station);

        $station['author'] = Auth::id();
        $station['name'] = $req->name;
        $station['code'] = $station->code;
        $station['phone'] = $req->phone;
        $station['latitude'] = $req->latitude;
        $station['longitude'] = $req->longitude;
        $station['description'] = $req->description;

        if ($req->hasFile('image')) {
            $image = $req->image;
            $imageName = time() . '-' . Str::slug($req->name) . '.' . $image->extension();
            $image->move(storage_path('app/public/stations/'), $imageName);
            $station['image'] = $imageName;
        }

        $station->update();

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
        Log::create('station-status',$station);

        if ($station->status == true){
            $station->status = false;
            $station->update();
        }else{
            $station->status = true;
            $station->update();
        }

        return MyResponse::success('İstasyon Durumu Güncellendi',$station,200);
    }
}
