<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
                'name' => 'owner1',
                'email' => 'owner1@admin.com',
                'password' => Hash::make('password123'),
                'created_at' => '2020/01/01 00:00:00',
            ],
            [
                'name' => 'owner2',
                'email' => 'owner2@admin.com',
                'password' => Hash::make('password123'),
                'created_at' => '2020/01/01 00:00:00',
            ],
            [
                'name' => 'owner3',
                'email' => 'owner3@admin.com',
                'password' => Hash::make('password123'),
                'created_at' => '2020/01/01 00:00:00',
            ],
        ]);

    }
}
