<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('donation')->insert([
            'mosque_id' => 1,
            'month' => 'January',
            'amount_collected_charity_box' => '1000',
            'amount_collected_bank_account' => '2000',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
    }
}
