<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        return response()->json(Unit::orderBy('order', 'asc')->get());
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            // Tambahkan validasi field lain sesuai tabel units kamu
        ]);

        $unit = Unit::create($request->all());
        return response()->json(['message' => 'Unit berhasil dibuat', 'data' => $unit], 201);
    }
}
