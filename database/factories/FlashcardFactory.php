<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FlashcardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->realText($maxNbChars = 10, $indexSize = 2),
            'content' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'category' => $this->faker->realText($maxNbChars = 10, $indexSize = 2),
            'level' => $this->faker->randomDigit(),
            'image_url' => $this->faker->imageUrl(640, 480, 'animals', true),
        ];
    }
}
// $table->string('name');
//             $table->string('content');
//             $table->string('category');
//             $table->string('level');
//             $table->string('image_url');