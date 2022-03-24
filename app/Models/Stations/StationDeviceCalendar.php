<?php

namespace App\Models\Stations;

use App\Models\Appointment\Appointment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StationDeviceCalendar extends Model
{
    use HasFactory;

    public function station(){
        return $this->belongsTo(Station::class);
    }

    public function appointments(){
        return $this->hasMany(Appointment::class,'station_device_id');
    }
}
