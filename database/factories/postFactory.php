<?php

namespace Database\Factories;

use App\Models\category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class postFactory extends Factory
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
            'title' => $this->faker->sentence(3),
            'content' => $this->faker->sentence(25),
            'category_id' => rand(1,5),
            'user_id' =>rand(1,10),
            'image'=>$this->faker->imageUrl($width = 900, $height = 400)
        ];
    }
}
