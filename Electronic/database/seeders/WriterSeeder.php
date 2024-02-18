<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $user=User::create([
           'name' => 'writer',
           'email'=> 'writer1996@gmail.com',
           'email_verified_at' => now(),
           'password' => Hash::make('writer123'),
         ])->assignRole('writer','writer');
    }
}
