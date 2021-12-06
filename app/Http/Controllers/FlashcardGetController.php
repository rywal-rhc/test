<?php

namespace App\Http\Controllers;

use App\Http\Resources\FlashcardResource;
use App\Models\Flashcard;

class FlashcardGetController extends Controller
{
    public function __invoke(Flashcard $card)
    {
        return FlashcardResource::make($card);
    }
}
