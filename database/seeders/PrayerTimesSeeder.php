<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PrayerTimesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prayer_times')->insert([
            'mosque_id' => 1,
            'state' => 'Example State',
            'zone' => 'Example Zone',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
