<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'fidah',
            'email' => 'fidah@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'manager'
        ]);
        DB::table('users')->insert([
            'name' => 'asep',
            'email' => 'asep@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'karyawan'
        ]);
        DB::table('users')->insert([
            'name' => 'davidtoreh',
            'email' => 'davidtoreh12@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'customer'
        ]);
    }
}
