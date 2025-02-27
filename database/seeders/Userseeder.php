<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //insert multiple users
        user:: create([
            'name' => 'Joy Burgei',
            'email' => 'joyburgei4@gmail.com',
            'password' => Hash::make ('password123'),
        ]);

        user::create([
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
            'password' => Hash::make('securepass'),
        ]);

        //add as much users as needed
    }
}
