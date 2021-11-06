<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'phone' => '083176479461',
            'gender' => 'Other',
            'birthday' => '2000-01-01',
            'address' => 'Malang',
            'role' => "adm",
            'password' => Hash::make('admin1234')
            // 'name' => 'Amelia Widya',
            // 'email' => 'ameliawidya@gmail.com',
            // 'phone' => '083176471010',
            // 'gender' => 'Other',
            // 'birthday' => '2000-01-11',
            // 'address' => 'Malang',
            // 'role' => "usr",
            // 'password' => Hash::make('amelia1234')
        ]);
    }
}
