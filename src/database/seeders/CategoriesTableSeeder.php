<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'type' => '商品のお届けについて',
        ];
        DB::table('categories')->insert($categories);
        
        $categories = [
            'type' => '商品の交換について',
        ];
        DB::table('categories')->insert($categories);
        
        $categories = [
            'type' => '商品トラブル',
        ];
        DB::table('categories')->insert($categories);
        
        $categories = [
            'type' => 'ショップへのお問い合わせ',
        ];
        DB::table('categories')->insert($categories);
        
        $categories = [
            'type' => 'その他',
        ];
        
        DB::table('categories')->insert($categories);
    }
}
