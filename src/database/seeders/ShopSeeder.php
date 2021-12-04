<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ShopSeeder extends Seeder
{
    public function run()
    {
        DB::table('shops')->insert([
            [
                'owner_id' => 1,
                'name' => 'owner1_shop_name',
                'information' => 'owner1_shop_information.owner1_shop_information.owner1_shop_information.owner1_shop_information.',
                'filename' => '',
                'is_selling' => true,
                'created_at' => '2020/01/01 00:00:00',
            ],
            [
                'owner_id' => 2,
                'name' => 'owner2_shop_name',
                'information' => 'owner2_shop_information.owner2_shop_information.owner2_shop_information.owner2_shop_information.',
                'filename' => '',
                'is_selling' => true,
                'created_at' => '2020/01/01 00:00:00',
            ],
            [
                'owner_id' => 3,
                'name' => 'owner3_shop_name',
                'information' => 'owner3_shop_information.owner3_shop_information.owner3_shop_information.owner3_shop_information.',
                'filename' => '',
                'is_selling' => true,
                'created_at' => '2020/01/01 00:00:00',
            ],
        ]);
    }
}
