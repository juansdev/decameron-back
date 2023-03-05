<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DepartmentsSeeder::class);
        $this->call(MunicipalitiesSeeder::class);
        $this->call(RoomTypesTableSeeder::class);
        $this->call(RoomAccommodationsTableSeeder::class);
    }
}
