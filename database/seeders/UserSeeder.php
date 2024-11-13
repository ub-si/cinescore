<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'João Silva',
            'email' => 'joao@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Maria Oliveira',
            'email' => 'maria@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Carlos Souza',
            'email' => 'carlos@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
