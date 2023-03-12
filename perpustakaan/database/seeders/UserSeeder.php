<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            'name' => 'arjun',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'),
            'level' => 'admin',
            // dan seterusnya
        ]);
    }
}
