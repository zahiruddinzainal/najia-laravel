<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EventCalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('event_calendar')->insert([
            'mosque_id' => 1,
            'title' => 'Example Event',
            'description' => 'Example Event Description',
            'date' => '2023-06-18',
            'organiser' => 'John Doe',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
