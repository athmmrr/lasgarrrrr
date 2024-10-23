<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = [
            [
                'username'=>'admin',
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'level'=>'admin',
                'password'=>Hash::make('123456')
            ],
            
            [
                'username'=>'user',
                'name'=>'User',
                'email'=>'user@gmail.com',
                'level'=>'user',
                'password'=>Hash::make('123456')
            ],
            [
                'username'=>'superadmin',
                'name'=>'supaadmin',
                'email'=>'super@gmail.com',
                'level'=>'superadmin',
                'password'=>Hash::make('123456')
            ],

        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}