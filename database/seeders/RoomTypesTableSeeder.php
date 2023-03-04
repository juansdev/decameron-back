<?php

namespace Database\Seeders;

use App\Models\RoomType;
use Illuminate\Database\Seeder;

class RoomTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roomTypes = [
            ['name' => 'Estándar'],
            ['name' => 'Junior'],
            ['name' => 'Suite'],
        ];

        foreach ($roomTypes as $roomType) {
            RoomType::create([
                'name' => $roomType['name']
            ]);
        }
    }
}
