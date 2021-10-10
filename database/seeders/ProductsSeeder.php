<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            'name'=>'Samsung Mobile',
            'price'=>'10000',
            'category'=>'Mobile',
            'des'=>'Top Class Smart Phone A21s',
            'gallery'=>'https://i.gadgets360cdn.com/products/large/V19-Vivo-DB-841x800-1586163515.jpg'
            ],
            [
                'name'=>'Samsung Mobile',
                'price'=>'10000',
                'category'=>'Mobile',
                'des'=>'Top Class Smart Phone A21s',
                'gallery'=>'https://i.gadgets360cdn.com/products/large/V19-Vivo-DB-841x800-1586163515.jpg'
            ]
        ]);
    }
}
