<?php

namespace Database\Seeders;

use App\Models\Role_has_permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WriterEditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Writer can edit details
        $role_has_permission=Role_has_permission::create([
           'permission_id'=>1,
           'role_id'=>2,
        ]);
    }
}
