<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => 'All',
                'sort_order' => 1,
            ],
            [
                'name' => 'Men',
                'sort_order' => 2,
            ],
            [
                'name' => 'Women',
                'sort_order' => 3,
            ],
            [
                'name' => 'Kids',
                'sort_order' => 4,
            ],
        ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => 'トップス',
                'sort_order' => 1,
                'primary_category_id' => 1,
            ],
            [
                'name' => 'ボトムス',
                'sort_order' => 2,
                'primary_category_id' => 1,
            ],
            [
                'name' => 'アイテム',
                'sort_order' => 3,
                'primary_category_id' => 1,
            ],
            [
                'name' => '腕時計',
                'sort_order' => 1,
                'primary_category_id' => 2,
            ],
            [
                'name' => '帽子',
                'sort_order' => 2,
                'primary_category_id' => 2,
            ],
            [
                'name' => 'メガネ',
                'sort_order' => 3,
                'primary_category_id' => 2,
            ],
            [
                'name' => 'アロマ',
                'sort_order' => 1,
                'primary_category_id' => 3,
            ],
            [
                'name' => 'ネイル',
                'sort_order' => 2,
                'primary_category_id' => 3,
            ],
            [
                'name' => 'コスメ',
                'sort_order' => 3,
                'primary_category_id' => 3,
            ],
            [
                'name' => '靴',
                'sort_order' => 1,
                'primary_category_id' => 4,
            ],
            [
                'name' => 'ベビーカー',
                'sort_order' => 2,
                'primary_category_id' => 4,
            ],
            [
                'name' => 'おもちゃ',
                'sort_order' => 3,
                'primary_category_id' => 4,
            ],
        ]);
    }
}
