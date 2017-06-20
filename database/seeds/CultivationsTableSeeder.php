<?php

use Illuminate\Database\Seeder;

class CultivationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cultivations')->delete();

        $datas= array(
            array('description'=>'Melon'),
            array('description'=>'Tomat'),
            array('description'=>'Apel'),
        );

        DB::table('cultivations')->insert($datas);
    }
}
