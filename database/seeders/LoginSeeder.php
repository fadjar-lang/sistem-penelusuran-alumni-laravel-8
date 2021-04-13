<?php

namespace Database\Seeders;

use App\Models\login;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'fajar',
            'level' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('fajar'),
            'remember_token' => Str::random(60),
        ]);
    }
}
