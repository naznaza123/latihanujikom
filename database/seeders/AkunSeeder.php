<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user=[
            [

                'name'=>'cacho',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('123456')
            ]
            ];
    }
}
