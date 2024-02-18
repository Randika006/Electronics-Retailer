<?php

namespace Database\Seeders;

use App\Models\Role_has_permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WriterDeleteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Writer can delete details
        $role_has_permission=Role_has_permission::create([
            'permission_id'=>2,
            'role_id'=>2,
        ]);
    }
}
