<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->unique()->sentence;
        $content = $this->faker->paragraphs(3, true);
        $created_at = $this->faker->dateTimeBetween('-1 year');
    
        return [ 
            'title' => $title,
            'slug' => Str::slug($title),
            'content' => $content,
            'excerpt' => Str::limit($content, 150),
            'thumbnail' => $this->faker->imageUrl(), 
            'created_at' => $created_at,
            'updated_at' => $created_at,
            // ...
        ];
    }
}
