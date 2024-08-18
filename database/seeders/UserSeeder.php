<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->updateOrInsert(['name' => 'name', 'email' => 'name@puso.com', 'email_verified_at' => date('Y-m-d H:i:s'), 'password' => Hash::make('password'), 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('users')->updateOrInsert(['name' => 'foo', 'email' => 'foo@puso.com', 'email_verified_at' => date('Y-m-d H:i:s'), 'password' => Hash::make('bar'), 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
    }
}
