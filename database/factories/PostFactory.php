<?php

namespace Database\Factories;

use App\Models\Post;
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
        return [
            'post_info' => $this->faker->realText(50, 2),
            'img' => $this->faker->imageUrl(640, 480),
            'profile_id' => $this->faker->numberBetween(1,20),
            'group_id' => $this->faker->numberBetween(1,5),
        ];
    }
}
