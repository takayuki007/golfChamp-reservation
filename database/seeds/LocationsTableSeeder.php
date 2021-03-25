<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            'name' => '日吉ゴルフ練習場',
            'address'=>'名古屋市中村区岩塚神明西',
            'url'=>url('https://goo.gl/maps/XQVgNMJt7vwmLVJ49'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('locations')->insert([
            'name' => 'ゴルフ・コンフォート',
            'address'=>'名古屋市天白区中砂町549',
            'url'=>url('https://goo.gl/maps/YbxkrNbWfzZ162v28'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('locations')->insert([
            'name' => 'バーディーゴルフ',
            'address'=>'愛西市落合町上河原1510-1',
            'url'=>url('https://goo.gl/maps/ehPyLkEvXS2ExX8A8'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
