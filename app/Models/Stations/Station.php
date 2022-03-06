<?php

namespace App\Models\Stations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Station extends Model
{
    use HasFactory,SoftDeletes;

   public function deviceCalendar(){ //cihaz uygunluk takvimi
       return $this->hasMany(StationDeviceCalendar::class,'station_device_id');
   }

    public function devices(){ // cihazlar
        return $this->hasMany(StationDevice::class,'station_id')->select('id','station_id','code','capacity','kw','price');
    }

    public function introduction(){ // tanıtım içerikleri
        return $this->hasOne(StationIntroduction::class,'station_id');
    }
}
