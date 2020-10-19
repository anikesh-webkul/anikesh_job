<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use database\seeders\job_detail_seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(job_detail_seeder::class);
    }
}
