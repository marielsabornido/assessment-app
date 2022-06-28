<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('program')->insert([
            // College ID 1 is CAS
            ['id' => 1, 'college_id' => 1, 'name' => 'Bachelor of Science in Information Technology', 'acronym' => 'BSIT'],
            ['id' => 2, 'college_id' => 1, 'name' => 'Bachelor of Science in Social Work', 'acronym' => 'BSSW'],
            ['id' => 3, 'college_id' => 1, 'name' => 'Bachelor of Arts in Communication', 'acronym' => 'ABCOM'],
            ['id' => 4, 'college_id' => 1, 'name' => 'Bachelor of Arts in Political Science', 'acronym' => 'AB POSCI'],

            // College ID 2 is COFED
            ['id' => 5, 'college_id' => 2, 'name' => 'Bachelor of Science in Elementary Education', 'acronym' => 'BEED'],
            ['id' => 6, 'college_id' => 2, 'name' => 'Bachelor of Science in Secondary Education', 'acronym' => 'BSED'],
            ['id' => 7, 'college_id' => 2, 'name' => 'Bachelor of Science in Special Education', 'acronym' => 'BSPED'],

            // College ID 3 is CME
            ['id' => 8, 'college_id' => 3, 'name' => 'Bachelor of Science in Tourism Management', 'acronym' => 'BSTM'],
            ['id' => 9, 'college_id' => 3, 'name' => 'Bachelor of Science in Hospitality Management', 'acronym' => 'BSPED'],
            ['id' => 10, 'college_id' => 3, 'name' => 'Bachelor of Science in Entrepreneurship', 'acronym' => 'BSEntrep'],
        ]);
    }
}
