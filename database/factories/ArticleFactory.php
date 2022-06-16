<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => mt_rand(1, 20),
            'category_id' => mt_rand(1, 5),
            'slug' => $this->faker->slug(mt_rand(1, 3)),
            'title' => $this->faker->sentence(mt_rand(10, 15)),
            'content' => $this->faker->paragraphs(mt_rand(200, 300))
        ];
    }
}
