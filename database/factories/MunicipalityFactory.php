<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Municipality;
use Illuminate\Database\Eloquent\Factories\Factory;

class MunicipalityFactory extends Factory
{
    protected $model = Municipality::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'department_id' => function () {
                return Department::factory()->create()->id;
            },
            'name' => $this->faker->city,
            'code' => $this->faker->numberBetween(1, 100),
            'status' => $this->faker->boolean(75)
        ];
    }
}
