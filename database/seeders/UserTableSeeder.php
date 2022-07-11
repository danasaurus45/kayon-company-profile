<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => "Admin",
                'username' => "admin",
                'email' => "admin@admin.com",
                'email_verified_at' => null,
                'password' => Hash::make('admin'),
                'remember_token' => null,
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ]
        ]);
    }
}
