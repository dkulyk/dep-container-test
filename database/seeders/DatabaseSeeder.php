<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::query()->create([
            'type' => 'admin',
        ]);
        User::query()->create([
            'role_id' => $role->id,
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('12345'),
        ]);
    }
}
