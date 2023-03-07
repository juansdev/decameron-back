<?php

namespace Database\Factories;

use App\Models\Hotel;
use App\Models\MunicipalHotel;
use App\Models\Municipality;
use Illuminate\Database\Eloquent\Factories\Factory;

class MunicipalHotelFactory extends Factory
{
    protected $model = MunicipalHotel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'hotel_id' => function () {
                return Hotel::factory()->create()->id;
            },
            'municipality_id' => function () {
                return Municipality::factory()->create()->id;
            },
            'address' => $this->faker->address,
            'number_rooms' => $this->faker->numberBetween(1, 100),
            'status' => $this->faker->boolean(),
        ];
    }
}
