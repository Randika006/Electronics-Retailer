<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;


use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $user=User::create([
           'name'=>'user',
           'email'=>'user1996@gmail.com',
           'email_verified_at'=>now(),
           'password'=> Hash::make('user123'),
        ])->assignRole('user','user');
    }
}
