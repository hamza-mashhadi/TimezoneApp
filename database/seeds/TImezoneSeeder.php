<?php

use Illuminate\Database\Seeder;

class TImezoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $times_array = array(
            array("Pakistan",'2019-01-19 05:14:12','GMT +0500'),
            array("USA",'2018-01-24 06:14:23', 'GMT -0500'),
            array("Singapore",'2008-04-15 03:14:47', 'GMT +0800')
    );

        foreach ($times_array as $time){
            DB::table('timezones')->insert([
                'location' => $time[0],
                'time' => $time[1],
                'offset'=>$time[2]
        ]);
        }
    }
}
