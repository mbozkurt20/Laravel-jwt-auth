<?php

namespace App\Models\Calendars;

use App\Models\Stations\Station;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AppointmentCalendar extends Model
{
    use HasFactory,SoftDeletes;

    public function Station(){
        return $this->belongsTo(Station::class);
    }
}
