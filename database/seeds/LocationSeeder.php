<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([[
            'name'=> 'Dawwar_Kafarsoseh',
            'state_id'=>'1'

         ],
         [
            'name'=> 'Mazzah',
            'state_id'=>'1'
            
         ],
         [
            'name'=> 'Midan',
            'state_id'=>'1'
            
         ],
         [
            'name'=> 'Hamrah',
            'state_id'=>'1'
            
         ],
         [
            'name'=> 'Salhia',
            'state_id'=>'1'
            
         ],
         [
            'name'=> 'Shalan',
            'state_id'=>'1'
            
         ],
         [
            'name'=> 'Bab_toma',
            'state_id'=>'1'
            
         ]
         ]);
    }
}
