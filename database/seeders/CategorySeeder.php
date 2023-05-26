<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories=[
            'General','Software','Electric','Electronic','Project','Program','Library','Technology'
        ];
        foreach($categories as $category){
            DB::table('categories')->insert([
                'category_name'=>$category,
                'category_slug'=>Str::slug($category),
                'imageUrl'=>'',
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
