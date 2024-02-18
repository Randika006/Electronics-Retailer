<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(RoleSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(WriterSeeder::class);
        $this->call(PermissionEditSeeder::class);
        $this->call(PermissionDeleteSeeder::class);
        $this->call(PermissionViewSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RoleHasPermissionSeeder::class);
        $this->call(AdminDeleteSeeder::class);
        $this->call(AdminViewSeeder::class);
        $this->call(WriterEditSeeder::class);
        $this->call(WriterDeleteSeeder::class);
        $this->call(WriterViewSeeder::class);
        $this->call(UserViewSeeder::class);
        $this->call(AdminEditPermissionSeeder::class);
        $this->call(AdminDeletePermissionSeeder::class);
        $this->call(AdminViewPermissionSeeder::class);
        $this->call(WriterEditPermissionSeeder::class);
        $this->call(WriterDeletePermissionSeeder::class);
        $this->call(WriterViewPermissionSeeder::class);
        $this->call(UserViewPermissionSeeder::class);
    }
}
