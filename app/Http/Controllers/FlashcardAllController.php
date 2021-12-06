<?php

namespace App\Http\Controllers;

use App\Http\Resources\FlashcardResource;
use Illuminate\Http\Request;
use App\Models\Flashcard;

class FlashcardAllController extends Controller
{
    public function all(){
        return FlashcardResource::collection(Flashcard::all());
    }
}
