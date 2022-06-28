<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course')->insert([
            // Program ID 1 is BSIT
            ['program_id' => 1, 'name' => 'IT Fundamentals', 'code' => 'IT_206'],
            ['program_id' => 1, 'name' => 'Database Management System', 'code' => 'IT_146'],
            ['program_id' => 1, 'name' => 'Web Development', 'code' => 'IT_484'],
            ['program_id' => 1, 'name' => 'Data Structures', 'code' => 'IT_187'],
            ['program_id' => 1, 'name' => 'System Analysis and Design', 'code' => 'IT_386'],

            // Program ID 6 is BSED
            ['program_id' => 6, 'name' => 'Principles of Teaching', 'code' => 'BSED_160'],
            ['program_id' => 6, 'name' => 'Facilitating Learning', 'code' => 'BSED_490'],
            ['program_id' => 6, 'name' => 'Assessment of Student Learning', 'code' => 'BSED_457'],
            ['program_id' => 6, 'name' => 'Social Dimensions of Education', 'code' => 'BSED_130'],

            // Program ID 8 is BSTM
            ['program_id' => 8, 'name' => 'Total Quality Management', 'code' => 'BSTM_453'],
            ['program_id' => 8, 'name' => 'Food and Beverage Service Procedures', 'code' => 'BSTM_163'],
            ['program_id' => 8, 'name' => 'Tourism Planning and Development', 'code' => 'BSTM_294'],
        ]);
    }
}
