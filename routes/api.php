<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ReadingController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserProgressController;
use App\Http\Controllers\VocabularyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Auth
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Units
Route::get('/units', [UnitController::class, 'index']);
Route::post('/units', [UnitController::class, 'store']);

// Readings
Route::get('/units/{unit_id}/reading', [ReadingController::class, 'show']);
Route::post('/readings', [ReadingController::class, 'store']);

// Vocabulary
Route::get('/readings/{reading_id}/vocabularies', [VocabularyController::class, 'index']);

Route::post('/vocabularies', [VocabularyController::class, 'store']);

Route::get('/readings/{reading_id}/quizzes', [QuizController::class, 'index']);
Route::post('/quizzes/submit', [QuizController::class, 'checkAnswer']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/progress/complete', [UserProgressController::class, 'updateProgress']);
});

// User (Default)
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
