<?php

namespace App\Http\Controllers;

use App\Models\UserProgress;
use Illuminate\Http\Request;

class UserProgressController extends Controller
{
    public function updateProgress(Request $request)
    {
        $request->validate([
            'reading_id' => 'required|exists:readings,id',
        ]);

        // Menggunakan updateOrCreate agar kalau data sudah ada, tinggal di-update
        $progress = UserProgress::updateOrCreate(
            ['user_id' => $request->user()->id, 'reading_id' => $request->reading_id],
            ['is_completed' => true]
        );

        return response()->json(['message' => 'Progres berhasil disimpan', 'data' => $progress]);
    }
}
