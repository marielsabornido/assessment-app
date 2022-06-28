<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('college')->insert([
            ['id' => 1, 'name' => 'College of Arts and Sciences', 'acronym' => 'CAS'],
            ['id' => 2, 'name' => 'College of Education', 'acronym' => 'COFED'],
            ['id' => 3, 'name' => 'College of Management and Entrepreneurship', 'acronym' => 'CME']
        ]);
    }
}
