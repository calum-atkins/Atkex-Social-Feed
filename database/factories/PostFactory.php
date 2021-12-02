<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Profile;
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
        return [
            'title' => $this->faker->realText(50, 2),
            'contents' => $this->faker->imageUrl(640, 480),
            'profile_id' => Profile::factory(),
            'group_id' => Group::factory(),
        ];
    }
}
