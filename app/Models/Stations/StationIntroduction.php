<?php

namespace App\Models\Stations;

use App\Models\Stations\Station;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StationIntroduction extends Model
{
    use HasFactory;

    public function station(){
        return $this->belongsTo(Station::class);
    }
}
