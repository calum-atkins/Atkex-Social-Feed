<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->firstName(),
            'password' => $this->faker->lastName(),
            'date_of_birth' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'email' => $this->faker->freeEmail(),
        ];
    }
}
