<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Unit;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat Unit dulu agar Reading punya induk
        $unit = Unit::create([
            'title' => 'Etika AI Dasar',
            'description' => 'Mengenal dasar etika AI',
            'order' => 1
        ]);

        // 2. Buat Reading dengan mengambil ID dari unit yang baru dibuat
        $reading = \App\Models\Reading::create([
            'unit_id' => $unit->id, 
            'title' => 'Apa itu Etika AI?',
            'content' => 'Etika AI adalah panduan moral...',
            'reading_time' => 5
        ]);

        // 3. Buat Vocabulary dengan mengambil ID dari reading yang baru dibuat
        \App\Models\Vocabulary::create([
            'reading_id' => $reading->id,
            'word' => 'Artificial Intelligence',
            'definition' => 'Sistem komputer cerdas.'
        ]);
    }
}