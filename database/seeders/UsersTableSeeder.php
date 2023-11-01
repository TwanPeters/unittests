<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            $name = 'Gebruiker ' . ($i + 1); // Genereer een unieke naam voor elke gebruiker
            $email = 'gebruiker' . ($i + 1) . '@example.com'; // Genereer een uniek e-mailadres
            $password = Hash::make('wachtwoord'); // Gebruik een standaardwachtwoord of genereer willekeurige wachtwoorden

            User::create([
                'name' => $name,
                'email' => $email,
                'password' => $password,
            ]);
        }
    }
}
