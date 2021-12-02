<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Profile;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'contents' => $this->faker->realText(50, 2),
            'profile_id' => Profile::factory(),
            'post_id' => Post::factory(),
        ];
    }
}
