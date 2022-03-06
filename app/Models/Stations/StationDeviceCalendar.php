<?php

namespace App\Models\Stations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StationDeviceCalendar extends Model
{
    use HasFactory;

    public function station(){
        return $this->belongsTo(Station::class);
    }
}
