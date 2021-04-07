<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('products')->insert([
            'product_name'=>'momo',
            'product_desc'=>'steem momo ho yo',
        ]);

        DB::table('products')->insert([
            'product_name'=>'roll',
            'product_desc'=>'steem roll ho yo',
        ]);
    }
}
