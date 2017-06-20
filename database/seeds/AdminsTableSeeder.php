<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admins')->delete();

        $datas= array(
            array(
                'role_id' => 1,
                'email' => 'admin@ad.com',
                'password' =>'admin',
                'name' => 'sp_admin'
            ),
            array(
                'role_id' => 2,
                'email' => 'user1@ad.com',
                'password' =>'user1',
                'name' => 'user-1'
            ),
            array(
                'role_id' => 2,
                'email' => 'user@ad.com',
                'password' =>'user2',
                'name' => 'user-2'
            )
        );

        DB::table('admins')->insert($datas);
    }
}
