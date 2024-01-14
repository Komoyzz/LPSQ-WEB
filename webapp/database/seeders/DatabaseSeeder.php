<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::insert([
            'username' => 'admin',
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => Hash::make('lpsqpis123'),
            'image' => '/img/default-profile.webp',
            'job' => 'Administrator',
            'address' => 'Jl. Administrator',
            'phone' => '081234567890',
            'type' => 'admin',
            'status' => 'active',
        ]);
    }
}
