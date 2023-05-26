<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles=[
            'Administrator','Super Admin','Admin','Super User','User','Guest',
        ];
        foreach($roles as $role){
            DB::table('roles')->insert([
                'role_name'=>$role,
                'role_slug'=>Str::slug($role),
                'imageUrl'=>'',
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
