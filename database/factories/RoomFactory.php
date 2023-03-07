<?php

namespace Database\Factories;

use App\Models\MunicipalHotel;
use App\Models\Room;
use App\Models\RoomAccommodation;
use App\Models\RoomType;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'municipal_hotel_id' => function () {
                return MunicipalHotel::factory()->create()->id;
            },
            'room_type_id' => function () {
                return RoomType::factory()->create()->id;
            },
            'room_accommodation_id' => function () {
                return RoomAccommodation::factory()->create()->id;
            },
            'status' => $this->faker->boolean(),
        ];
    }
}
