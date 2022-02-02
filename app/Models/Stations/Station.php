<?php

namespace App\Models\Stations;

use App\Models\Calendars\AppointmentCalendar;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Station extends Model
{
    use HasFactory,SoftDeletes;

    public function AppointmentCalendar()
    {
        return $this->hasMany(AppointmentCalendar::class,'station_id');
    }
}
