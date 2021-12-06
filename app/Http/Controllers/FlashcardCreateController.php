<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFlashcardRequest;
use App\Models\Flashcard;

// potrzebujemy endpoint ktory tworzy fiszke
// validacja danych
// po validacji zapisuje fiszke do bazy danych


class FlashcardCreateController extends Controller
{
   public function store (StoreFlashcardRequest $request) {

     $data = $request->validated();
     
     $flashcard = new Flashcard($data);
     
     $flashcard->save();

     return response()->json('', 201);
   }

}
