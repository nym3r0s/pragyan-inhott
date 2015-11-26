<?php

use Illuminate\Database\Seeder;

class SeedPointsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('points')->insert(["hostel"=>'Agate',"points"=>0]); 
         DB::table('points')->insert(["hostel"=>'Diamond',"points"=>0]);
         DB::table('points')->insert(["hostel"=>'Coral',"points"=>0]);
         DB::table('points')->insert(["hostel"=>'Jade',"points"=>0]);
         DB::table('points')->insert(["hostel"=>'Opal',"points"=>0]);
    }
}
