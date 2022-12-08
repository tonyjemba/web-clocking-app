<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //using query builder to insert first user in the database
        DB::table('users')->insert([
            'name' => 'trailanalytics',
            'email' => 'info@trailanalytics.com',
            'type' => 'admin',
            'password' => Hash::make('admin'),
        ]);
    }
}
