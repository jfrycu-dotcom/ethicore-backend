<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VocabularySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('vocabularies')->insert([
            [
                'reading_id' => 1,
                'word' => 'Artificial Intelligence',
                'definition' => 'Sistem komputer yang mampu melakukan tugas yang biasanya membutuhkan kecerdasan manusia.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'reading_id' => 1,
                'word' => 'Ethics',
                'definition' => 'Prinsip moral yang mengatur perilaku seseorang atau bagaimana suatu aktivitas dilakukan.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
