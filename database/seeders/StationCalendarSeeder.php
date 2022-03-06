<?php

namespace Database\Seeders;

use App\Models\Stations\StationCalendar;
use App\Models\Stations\StationDevice;
use App\Models\Stations\StationDeviceCalendar;
use Illuminate\Database\Seeder;

class StationCalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $calendar = [
          ['station_device_id' => 1,'author' => 1,  'start_date' => '2022-02-10','end_date' => '2022-02-15','start_time' => '14:15', 'end_time' => '14:35'],
          ['station_device_id' => 1,'author' => 1,  'start_date' => '2022-02-20','end_date' => '2022-02-24','start_time' => '11:15', 'end_time' => '16:35'],
          ['station_device_id' => 2,'author' => 1,  'start_date' => '2022-02-10','end_date' => '2022-02-15','start_time' => '14:15', 'end_time' => '14:35'],
          ['station_device_id' => 3,'author' => 1,  'start_date' => '2022-02-10','end_date' => '2022-02-15','start_time' => '14:15', 'end_time' => '14:35'],
          ['station_device_id' => 4,'author' => 1,  'start_date' => '2022-02-10','end_date' => '2022-02-15','start_time' => '14:15', 'end_time' => '14:35'],
          ['station_device_id' => 5,'author' => 1,  'start_date' => '2022-02-10','end_date' => '2022-02-15','start_time' => '14:15', 'end_time' => '14:35'],
        ];

        foreach ($calendar as $c){
            StationDeviceCalendar::create($c);
        }
    }
}
