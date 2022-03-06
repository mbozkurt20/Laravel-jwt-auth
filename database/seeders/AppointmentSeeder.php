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
            ['user_id' => 1,'station_device_id' => 1,'price' =>  price(1,'11:14','11:25'),'date' => '2022-02-15','start_time' => '11:14','end_time' => '11:25','star' => rand(1,5)],
            ['user_id' => 1,'station_device_id' => 2,'price' =>  price(2,'08:14','08:25'),'date' => '2022-01-21','start_time' => '08:14','end_time' => '08:25','star' => rand(1,5),'status' => 'done'],
            ['user_id' => 1,'station_device_id' => 2,'price' =>  price(2,'12:35','13:00'),'date' => '2022-02-19','start_time' => '12:35','end_time' => '13:00','star' => rand(1,5),'status' => 'done'],
            ['user_id' => 1,'station_device_id' => 3,'price' =>  price(3,'10:27','10:41'),'date' => '2022-02-12','start_time' => '10:27','end_time' => '10:41','star' => rand(1,5),'status' => 'cancel','reason' => 'Yolumu değiştiğimden dolayı iptal etmem gerekti'],
        ];

        foreach ($datas as $data){
            Appointment::create($data);
        }


    }
}
