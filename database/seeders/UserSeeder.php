<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Masjid Sultan Aziz Salahudin Shah',
            'email' => 'masjidsaas@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'organisation_name' => 'Masjid Sultan Aziz Salahudin Sha',
            'phone' => '1234567890',
            'pic_name' => null,
            'bank_account_number' => '123456789',
            'bank_name' => 'Maybank',
            'qrpay_url' => 'https://example.com/qrpay',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
