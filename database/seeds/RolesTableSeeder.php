<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->delete();

        $datas= array(
            array('description'=>'Admin'),
            array('description'=>'User')
        );

        DB::table('roles')->insert($datas);
    }
}
