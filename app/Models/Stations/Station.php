<?php

namespace App\Models\Stations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Station extends Model
{
    use HasFactory,SoftDeletes;

   public function stationCalendar(){ // uygunluk durum içerikleri
       return $this->hasMany(StationCalendar::class,'station_id');
   }

    public function calculator(){ // hesaplama içerikleri
        return $this->hasOne(StationCalculator::class,'station_id');
    }

    public function introduction(){ // tanıtım içerikleri
        return $this->hasOne(StationIntroduction::class,'station_id');
    }
}
