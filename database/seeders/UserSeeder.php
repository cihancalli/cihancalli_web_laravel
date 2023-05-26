<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'role_id'=>1,
            'username'=>'administrator',
            'firstname'=>'',
            'lastname'=>'',
            'email'=>'administrator@zerdasoftware.com',
            'password'=>bcrypt('123456'),
            'imageUrl'=>'',
            'status'=>1,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
