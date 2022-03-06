<?php

namespace App\Models\Appointment;

use App\Models\Stations\Station;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use HasFactory,SoftDeletes;

    public function stationData(){
        return $this->belongsTo(Station::class,'station_id');
    }
}
