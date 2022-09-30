<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin_test',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$EuIzH2sqy/x8kafmy8Bu1utDaOnHiBFzJeRPOAAj8Zn.xm7KKVMBW'
        ]);
    }
}
