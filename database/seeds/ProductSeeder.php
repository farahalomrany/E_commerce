<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
        DB::table('products')->insert([[
            'name'=> 'Cuty_Sweat',
            'description'=>'40*40 cm',
            'sell_price'=>'32000',
            'total_q'=>'20',
            'color'=>'Pinck',
            'size'=>'L',
            'image'=>'assdkj',
            'brand_id'=>'1',
            'category_id'=>'1',
         //   'user_id'=>'1',
            'vote_count'=>'60'
            ,'vote_average'=>'12',
            'popularity'=>'10'
         ],
         [
            'name'=> 'summer_Sweat',
            'description'=>'40*40 cm',
            'sell_price'=>'25000',
            'total_q'=>'25',
            'color'=>'blue',
            'size'=>'L',
            'image'=>'assdkj',
            'brand_id'=>'1',
            'category_id'=>'1',
          //  'user_id'=>'1',
            'vote_count'=>'50'
            ,'vote_average'=>'10',
            'popularity'=>'12'
         ],
         [
            'name'=> 'summer_pant',
            'description'=>'60*40 cm',
            'sell_price'=>'25000',
            'total_q'=>'25',
            'color'=>'jins',
            'size'=>'L',
            'image'=>'khkdsgh',
            'brand_id'=>'1',
            'category_id'=>'1',
          //  'user_id'=>'1',
            'vote_count'=>'85'
            ,'vote_average'=>'10',
            'popularity'=>'20'
         ],
         [
            'name'=> 'pinky_short',
            'description'=>'40*40 cm',
            'sell_price'=>'45000',
            'total_q'=>'15',
            'color'=>'pink',
            'size'=>'L',
            'image'=>'sere',
            'brand_id'=>'2',
            'category_id'=>'2',
           // 'user_id'=>'1',
            'vote_count'=>'52'
            ,'vote_average'=>'10',
            'popularity'=>'25'
         ],
         [
            'name'=> 'jeans_short',
            'description'=>'40*40 cm',
            'sell_price'=>'25000',
            'total_q'=>'15',
            'color'=>'dark_blue',
            'size'=>'L',
            'image'=>'sere',
            'brand_id'=>'2',
            'category_id'=>'2',
           // 'user_id'=>'1',
            'vote_count'=>'60'
            ,'vote_average'=>'50',
            'popularity'=>'19'
         ],
        ]);
    }
}
