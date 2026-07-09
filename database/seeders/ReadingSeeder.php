<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReadingSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('readings')->insert([
            'unit_id' => 1,
            'title' => 'Apa itu Etika AI?',
            'content' => 'Etika AI adalah panduan moral dalam mengembangkan dan menggunakan kecerdasan buatan agar tetap adil, transparan, dan tidak merugikan kemanusiaan.',
            'reading_time' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
