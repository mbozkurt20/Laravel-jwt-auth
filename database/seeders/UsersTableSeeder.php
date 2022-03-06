<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        $user = User::create([
            'full_name' => 'Mehmet Bozkurt',
            'username' => 'mbozkurt',
            'email' => 'mbozkurt020@hotmail.com',
            'password' => Hash::make('123456789'),
            'status' => 1,
            'email_verification_token' => $faker->safeEmail
        ]);
        DB::table('role_user')->insert(['role_id' => 1, 'user_id' => $user->id]);

        //-------------------------------------------------------------
        for ($i = 0; $i <= 10; $i++) {
            $data = [
                'full_name' => $faker->name,
                'username' => $faker->userName,
                'email' => $faker->email,
                'password' => Hash::make('123456789'),
                'email_verification_token' => $faker->safeEmail
            ];
            $user = User::create($data);

            DB::table('role_user')->insert(['role_id' => 2, 'user_id' => $user->id]);
        }

    }
}
