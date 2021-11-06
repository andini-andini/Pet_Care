<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctor;
use Illuminate\Support\Facades\Hash;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Doctor::create([
            'sip' => '123/abc/456/2021',
            'name' => 'Amelia Widya',
            'email' => 'ameliawidya@gmail.com',
            'phone' => '083176471010',
            'address' => 'Malang',
        ]);
    }
}
