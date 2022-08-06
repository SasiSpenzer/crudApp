<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TitlesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('titles')->delete();
        
        \DB::table('titles')->insert(array (
            0 => 
            array (
                'emp_no' => 13,
                'title' => 'sasas',
                'from_date' => '2022-09-01',
                'to_date' => '2022-08-03',
            ),
        ));
        
        
    }
}