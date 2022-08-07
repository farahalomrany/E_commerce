<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        DB::table('users')->insert([[
            'name'=> 'tasnim shikh',
            'email'=>'tasnim.sy@gmail.com',
            'email_verified_at'=>'2022-07-01',
            'password'=>'$$$$$$$$',
            'phone'=>'093866335',
            'location_id'=>'1',
            'remember_token'=>'asdfrghj'
         ],
         [
            'name'=> 'Rama',
            'email'=>'Rama.sy@gmail.com',
            'email_verified_at'=>'2022-07-01',
            'password'=>'$$$$$$$$',
            'phone'=>'0955555555',
            'location_id'=>'2',
            'remember_token'=>'asdfrghj'
         ],
         [
            'name'=> 'Farah',
            'email'=>'Farah.sy@gmail.com',
            'email_verified_at'=>'2022-07-01',
            'password'=>'$$$$$$$$',
            'phone'=>'0966666666',
            'location_id'=>'3',
            'remember_token'=>'asdfrghj'
         ],
         [
            'name'=> 'Lana',
            'email'=>'Lana.sy@gmail.com',
            'email_verified_at'=>'2022-07-01',
            'password'=>'$$$$$$$$',
            'phone'=>'0988888888',
            'location_id'=>'4',
            'remember_token'=>'asdfrghj'
         ],
         [
            'name'=> 'Hala',
            'email'=>'Hala.sy@gmail.com',
            'email_verified_at'=>'2022-07-01',
            'password'=>'$$$$$$$$',
            'phone'=>'0955555555',
            'location_id'=>'5',
            'remember_token'=>'asdfrghj'
         ]
         ]);
    }
}
