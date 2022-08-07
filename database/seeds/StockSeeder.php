<?php

use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('stocks')->insert([[
            'quantity'=> '20',
            'net_price'=>'15000',
            'sell_price'=>'32000',
            'date'=>'2022-07-01',
            'product_id'=>'1',
        ],
        [
            'quantity'=> '25',
            'net_price'=>'15000',
            'sell_price'=>'25000',
            'date'=>'2022-07-06',
            'product_id'=>'2',
        ]
        ]);

    }
}
