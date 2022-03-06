<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Role Types
         *
         */
        $RoleItems = [
            [
                'name'        => 'Station Owner',
                'slug'        => 'station-owner',
                'description' => 'İstasyon Sahibi',
                'level'       => 1,
            ],
            [
                'name'        => 'Clients',
                'slug'        => 'client',
                'description' => 'Sadece hizmet alan',
                'level'       => 1,
            ],
            [
                'name'        => 'Service and Clients',
                'slug'        => 'clientService',
                'description' => 'Hizmet alan ve hizmet sağlayan',
                'level'       => 1,
            ],
        ];

        /*
         * Add Role Items
         *
         */
        foreach ($RoleItems as $RoleItem) {
            $newRoleItem = config('roles.models.role')::where('slug', '=', $RoleItem['slug'])->first();
            if ($newRoleItem === null) {
                $newRoleItem = config('roles.models.role')::create([
                    'name'          => $RoleItem['name'],
                    'slug'          => $RoleItem['slug'],
                    'description'   => $RoleItem['description'],
                    'level'         => $RoleItem['level'],
                ]);
            }
        }
    }
}
