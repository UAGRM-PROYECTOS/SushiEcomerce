<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dario = User::create([
            'name' => 'Daniel Cueto Torrico',
            'email' => 'daniel@gmail.com',
            'password' => bcrypt('12345678'),
            'is_admin' => true
        ]);

        User::create([
            'name' => 'Karol Ortiz Rocha',
            'email' => 'karol@gmail.com',
            'password' => bcrypt('12345678'),
            'is_admin' => true
        ]);

        User::create([
            'name' => 'Alison Tacoo Maturano',
            'email' => 'alison@gmail.com',
            'password' => bcrypt('12345678'),
            'is_admin' => true
        ]);
    }
}
