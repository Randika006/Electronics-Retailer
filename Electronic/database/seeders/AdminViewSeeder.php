<?php

namespace Database\Seeders;

use App\Models\Role_has_permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Admin can view details
        $role_has_permission=Role_has_permission::create([
            'permission_id'=>3,
            'role_id'=>1,
        ]);
    }
}
