<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlashcardGetController;
use App\Http\Controllers\FlashcardAllController;
use App\Http\Controllers\FlashcardCreateController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/flashcard/{card}', FlashcardGetController::class);
Route::get('/flashcards', [FlashcardAllController::class, 'all']);

Route::post('/flashcard', [FlashcardCreateController::class, 'store'])->name('flashcard');


// potrzebujemy endpoint ktory tworzy fiszke
// validacja danych
// 
