<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFlashcardRequest;
use App\Models\Flashcard;

class FlashcardCreateController extends Controller
{
    public function __invoke(Flashcard $card, StoreFlashcardRequest $request)
    {
        return new FlashcardResource(Flashcard::findOrFail($card));
    }

}
