<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    // Mengambil semua soal kuis untuk bacaan tertentu
    public function index($reading_id)
    {
        return Quiz::where('reading_id', $reading_id)->get();
    }
    public function checkAnswer(Request $request)
    {
        $request->validate([
            'quiz_id' => 'required|exists:quizzes,id',
            'answer' => 'required|string',
        ]);

        $quiz = \App\Models\Quiz::find($request->quiz_id);

        // Memeriksa apakah jawaban benar
        $isCorrect = ($request->answer === $quiz->correct_answer);

        return response()->json([
            'is_correct' => $isCorrect,
            'correct_answer' => $quiz->correct_answer
        ]);
    }
}
