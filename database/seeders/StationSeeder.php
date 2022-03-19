<?php

namespace Database\Seeders;

use App\Models\Stations\Station;
use App\Models\Stations\StationDevice;
use Faker\Factory;
use Illuminate\Database\Seeder;

class StationSeeder extends Seeder
{


    public function run()
    {
        $array = [
            ['city' => 'Manisa', 'lat' => '38.630554','long' => '27.422222','img' => 'manisa.jpg'],
            ['city' => 'Diyarbakır', 'lat' => '37.910000','long' => '40.240002','img' => 'diyarbakir.jpg'],
            ['city' => 'İzmit', 'lat' => '40.766666','long' => '29.916668','img' => 'izmit.jpg'],
            ['city' => 'Gaziantep', 'lat' => '37.066666','long' => '37.383331','img' => 'antep.jpg'],
            ['city' => 'Şanlıurfa', 'lat' => '37.158333','long' => '38.791668','img' => 'urfa.jpg'],
        ];

        $faker = Factory::create();
        foreach ($array as $a){
            $station = Station::create([
                'author' => 1,
                'name' => $a['city'],
                'image' => $a['img'],
                'star' => rand(1,5),
                'latitude' => $a['lat'],
                'longitude' => $a['long'],
                'code' => \CodeGenerator\Station($a['city']),
                'description' => $faker->text ]);

                 StationDevice::create([
                     'station_id' => $station->id,
                     'author' => 1,
                     'code' =>  \CodeGenerator\Device($station->id) ,
                     'capacity' => array_random([100,200,300,400,500,600,700,800,900,1000,2000,3000,4000,5000]),
                     'price' => rand(10,80)
            ]);
        }

    }


}
