<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Quiz::create([
            'reading_id' => 1,
            'question' => 'Apa tujuan utama dari etika AI?',
            'options' => json_encode(['Mencuri data', 'Memastikan AI aman dan bermanfaat', 'Membuat AI menjadi jahat', 'Menggantikan manusia']),
            'correct_answer' => 'Memastikan AI aman dan bermanfaat',
        ]);
    }
}
