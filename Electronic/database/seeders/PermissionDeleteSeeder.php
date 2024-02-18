<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;


use Illuminate\Database\Seeder;

class PermissionDeleteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permission=Permission::create([
            'name'=>'Delete',
            'guard_name'=>'web',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
    }
}
