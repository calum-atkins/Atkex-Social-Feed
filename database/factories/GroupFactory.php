<?php

namespace Database\Factories;

use App\Models\Group;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Group::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $numberOfUsers = User::count();
        return [
            'name' => $this->faker->domainWord(),
            'description' => $this->faker->city(),
            'user_id' => $this->faker->numberBetween(1, $numberOfUsers),
        ];
    }
}
