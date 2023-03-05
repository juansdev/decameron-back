<?php

namespace Database\Factories;

use App\Models\RoomAccommodation;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomAccommodationFactory extends Factory
{
    protected $model = RoomAccommodation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->name,
            'status' => $this->faker->boolean(),
        ];
    }
}
