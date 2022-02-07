<?php

namespace App\Models\Stations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StationCalendar extends Model
{
    use HasFactory,SoftDeletes;

    public function station(){
        return $this->belongsTo(Station::class);
    }
}
