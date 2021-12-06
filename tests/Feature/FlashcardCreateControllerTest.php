<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\LazilyRefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FlashcardCreateControllerTest extends TestCase
{
    use WithFaker;
    use LazilyRefreshDatabase;

    //* @test */
    public function flashcard_is_created(){

        $data = [
            'name' => $this->faker->realText($maxNbChars = 10, $indexSize = 2),
            'content' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'category' => $this->faker->realText($maxNbChars = 10, $indexSize = 2),
            'level' => $this->faker->randomDigit(),
            'image_url' => $this->faker->imageUrl(640, 480, 'animals', true),
        ];

        $response = $this->postJson(route('flashcard'), $data);

        $response
        ->assertStatus(201);

        $this->assertDatabaseHas('flashcards', $data);
    }
    /** @test */
    public function flashcard_is_dumped_when_data_is_wrong(){
 
        $this->postJson(route('flashcard'), [])
            ->assertStatus(422);
    }
}