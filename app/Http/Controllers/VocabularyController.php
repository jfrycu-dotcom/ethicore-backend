<?php

namespace App\Http\Controllers;

use App\Models\Vocabulary;
use Illuminate\Http\Request;

class VocabularyController extends Controller
{
    // Mengambil semua kosakata dari suatu bacaan
    public function index($reading_id)
    {
        return Vocabulary::where('reading_id', $reading_id)->get();
    }

    // Menambah kosakata baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'reading_id' => 'required|exists:readings,id',
            'word' => 'required|string',
            'definition' => 'required|string',
        ]);

        return Vocabulary::create($validated);
    }
}
