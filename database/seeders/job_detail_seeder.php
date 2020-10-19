<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class job_detail_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_description')->insert([
            'title'=> 'Android Developer',
            'ex_from' => '0',
            'ex_to'=>'3',
            'opening'=>'5',
            'ctc'=>'3'

        ]);
        DB::table('job_description')->insert([
            'title'=> 'PHP Developer',
            'ex_from' => '0',
            'ex_to'=>'3',
            'opening'=>'5',
            'ctc'=>'3'

        ]);
        DB::table('job_description')->insert([
            'title'=> 'Python Developer',
            'ex_from' => '0',
            'ex_to'=>'3',
            'opening'=>'5',
            'ctc'=>'3'

        ]);

       
    }
}
