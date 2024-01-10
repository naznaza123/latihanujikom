<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AkunBahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $userdata=[
            [
                'name'=>'Wadooh',
                'email'=>'wadooh@gmail.com',
                'password'=>bcrypt('123456'),
                'role'=>'pelajar'
            ],[
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('123456'),
                'role'=>'admin'
            ]
            ];

            foreach ($userdata as $key => $value) {
                User::create($value);
            }
    }
}
