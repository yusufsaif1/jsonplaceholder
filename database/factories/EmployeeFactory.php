<?php

namespace Database\Factories;

use App\Models\employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "ename" => $this->faker->name,
            "profile" => $this->faker->text,
            "email" => $this->faker->email,
            "address" => $this->faker->address,
            "salary" => 5000
        ];
    }
}
