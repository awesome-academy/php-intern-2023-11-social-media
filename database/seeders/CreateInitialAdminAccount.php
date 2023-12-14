<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateInitialAdminAccount extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::unguard();
        User::create([
            'name' => 'admin account',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'username' => 'admin-account',
            'is_active' => true,
            'is_admin' => true,
        ]);
    }
}
