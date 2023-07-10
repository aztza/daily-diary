<?php

namespace Database\Seeders;

use App\Models\Diary;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DiarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Diary::factory()->count(10)->create();
    }
}
