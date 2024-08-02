<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Khairul Aswad',
            'username' => 'khairulaswad',
            'email' => 'khairul@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('khairul'),
            'remember_token' => Str::random('10')
        ]);

        User::create([
            'name' => 'alok',
            'username' => 'alok',
            'email' => 'alok@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('alok'),
            'remember_token' => Str::random('10')
        ]);
    }
}
