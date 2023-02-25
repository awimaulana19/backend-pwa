<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'roles' => 'admin',
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'remember_token' => Str::random(60)
        ]);
        
        User::create([
            'roles' => 'pasien',
            'username' => 'pasien',
            'password' => bcrypt('pasien'),
            'is_verification' => 1,
            'remember_token' => Str::random(60)
        ]);

        User::create([
            'roles' => 'pasien',
            'username' => 'pasien2',
            'password' => bcrypt('pasien2'),
            'is_verification' => 1,
            'remember_token' => Str::random(60)
        ]);
    }
}
