<?php

namespace Database\Seeders;

use App\CustomClass\Calculator;
use App\Models\Appointment\Appointment;
use Illuminate\Database\Seeder;
use function App\CustomClass\price;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            ['user_id' => 1,'station_device_id' => 1,'price' =>  234,'date' => '2022-02-15','kw' => 20,'time' => '11:25','star' => rand(1,5)],
            ['user_id' => 1,'station_device_id' => 2,'price' =>  545,'date' => '2022-01-21','kw' => 20,'time' => '08:25','star' => rand(1,5),'status' => 'done'],
            ['user_id' => 1,'station_device_id' => 2,'price' => 123,'date' => '2022-02-19','kw' => 20,'time' => '13:00','star' => rand(1,5),'status' => 'done'],
            ['user_id' => 1,'station_device_id' => 3,'price' =>  126,'date' => '2022-02-12','kw' => 20,'time' => '10:41','star' => rand(1,5),'status' => 'cancel','reason' => 'Yolumu değiştiğimden dolayı iptal etmem gerekti'],
        ];

        foreach ($datas as $data){
            Appointment::create($data);
        }


    }
}
