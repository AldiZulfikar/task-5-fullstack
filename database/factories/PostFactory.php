<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" =>  $this->faker->sentence(3),
            "content" => $this->faker->paragraph(30),
            "user_id" => mt_rand(1,10),
            "category_id" => mt_rand(1,3),
        ];
    }
}
