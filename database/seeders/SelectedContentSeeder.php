<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SelectedContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('selected_content')->insert([
            'mosque_id' => 1,
            'hadis_verse' => 'Example Hadith Verse',
            'quran_verse' => 'Example Quran Verse',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
