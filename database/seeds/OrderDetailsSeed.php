<?php

use Illuminate\Database\Seeder;

class OrderDetailsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     
    public function run()
    {
        DB::table('order_details')->insert([[
            'price'=>'25000',
            'total_price'=> '50000',
            'quantity'=>'2',
            'num_stock'=>'1',
            'product_id'=>'2',
            'order_id'=>'1'  

         ],
         [
            'price'=>'32000',
            'total_price'=> '64000',
            'quantity'=>'2',
            'num_stock'=>'1',
            'product_id'=>'1',
            'order_id'=>'2'  

         ],
         [
            'price'=>'45000',
            'total_price'=> '45000',
            'quantity'=>'1',
            'num_stock'=>'1',
            'product_id'=>'4',
            'order_id'=>'3'  

         ],
        ]);
    }
}
