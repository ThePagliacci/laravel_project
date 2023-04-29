<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() // factoy dan biraz farklı, sahte data eklemek için
    {
        DB::table('users')->insert([
            'name' => Str::random(5),
            'email' => Str::random(5).'@gmail.com',
            'password' => Hash::make('password'),
            'created_at' =>now(),
            'remember_token' => Str::random(10),
        ]);
    }
}
