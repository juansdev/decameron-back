<?php

namespace Database\Seeders;

use App\Models\RoomAccommodation;
use Illuminate\Database\Seeder;

class RoomAccommodationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roomAccommodations = [
            ['name' => 'Sencilla'],
            ['name' => 'Doble'],
            ['name' => 'Triple'],
            ['name' => 'Cuádruple']
        ];

        foreach ($roomAccommodations as $roomAccommodation) {
            RoomAccommodation::create($roomAccommodation);
        }
    }
}
