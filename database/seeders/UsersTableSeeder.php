<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i=0; $i<= 10; $i++){
            $data = [
                'full_name' => $faker->name,
                'username' => $faker->userName,
                'email' => $faker->email,
                'password' => Hash::make('123456789'),
                'email_verification_token' => $faker->safeEmail
            ];
            $user = User::create($data);

        }

    }
}
