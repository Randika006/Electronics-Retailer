<?php

namespace Database\Seeders;

use App\Models\Model_has_permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WriteDeletePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $model_has_permission=Model_has_permission::create([
           'permission_id'=>2,
           'model_type'=>'App\Models\User',
           'model_id'=>2,
        ]);
    }
}
