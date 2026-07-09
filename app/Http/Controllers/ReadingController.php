<?php

namespace App\Http\Controllers;

use App\Models\Reading;
use Illuminate\Http\Request;

class ReadingController extends Controller
{
    // Mengambil bacaan berdasarkan unit_id
    public function show($unit_id)
    {
        $reading = Reading::where('unit_id', $unit_id)->first();

        if (!$reading) {
            return response()->json(['message' => 'Materi belum tersedia'], 404);
        }

        return response()->json($reading);
    }

    // Menambah bacaan baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'unit_id' => 'required|exists:units,id',
            'title' => 'required|string|max:255',
            'content' => 'required',
            'reading_time' => 'required|integer',
        ]);

        $reading = Reading::create($validated);

        return response()->json([
            'message' => 'Materi berhasil ditambahkan',
            'data' => $reading
        ], 201);
    }
}
