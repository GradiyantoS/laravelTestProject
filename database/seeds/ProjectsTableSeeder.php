<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Ramsey\Uuid\Uuid;
class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('projects')->delete();

        $datas= array(
            array(
                'id' => Uuid::uuid4()->toString(),
                'cultivation_id' => 1,
                'title'=>'Melon Bro',
                'start_at' => Carbon::create('2015', '01', '01'),
                'end_at' =>Carbon::create('2015', '06', '01'),
                'image_url' => 'melon.jpg'
            ),
            array(
                'id' => Uuid::uuid4()->toString(),
                'cultivation_id' => 2,
                'title'=>'Tomat Bro',
                'start_at' => Carbon::create('2016', '12', '01'),
                'end_at' =>Carbon::create('2017', '12', '01'),
                'image_url' => 'tomat.jpg'
            ),
            array(
                'id' => Uuid::uuid4()->toString(),
                'cultivation_id' => 3,
                'title'=>'Apel Bro',
                'start_at' => Carbon::create('2016', '06', '01'),
                'end_at' => Carbon::create('2016', '12', '01'),
                'image_url' => 'apel.jpg'
            )
        );
        DB::table('projects')->insert($datas);
    }
}
