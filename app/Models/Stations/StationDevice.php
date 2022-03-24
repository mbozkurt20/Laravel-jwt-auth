<?php

namespace App\Models\Stations;

use App\Models\Appointment\Appointment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StationDevice extends Model
{
    use HasFactory,SoftDeletes;

    public function station(){
        return $this->belongsTo(Station::class);
    }

    public function appointments(){
        return $this->hasMany(Appointment::class,'station_device_id');
    }

    public function calendars(){
        return $this->hasMany(StationDeviceCalendar::class,'station_device_id');
    }
}
