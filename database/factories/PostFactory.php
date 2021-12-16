<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $numberOfUsers = User::count();
        $numberOfGroups = Group::count();
        return [
            'title' => $this->faker->realText(20, 1),
            'contents' => $this->faker->realText(100, 1),
            'image' => $this->faker->imageUrl(640, 480),
            'user_id' => $this->faker->numberBetween(1, $numberOfUsers),
            'group_id' => $this->faker->numberBetween(1, $numberOfGroups),
        ];
    }
}
