<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('events')->insert([

        
        	[

            'title'=>'Match',
            'start'=>'2020-07-09 21:30:00',
             'end'=>'2020-07-10 21:30:00',
             'color'=>'#c40233',
             'description'=>'tournament',
        	],


        ]);
    }
}
