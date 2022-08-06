<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SalariesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('salaries')->delete();
        
        \DB::table('salaries')->insert(array (
            0 => 
            array (
                'emp_no' => 8,
                'salary' => 12000,
                'from_date' => '2022-09-10',
                'to_date' => '2022-08-24',
            ),
            1 => 
            array (
                'emp_no' => 9,
                'salary' => 12000,
                'from_date' => '2022-08-12',
                'to_date' => '2022-08-25',
            ),
            2 => 
            array (
                'emp_no' => 10,
                'salary' => 12000,
                'from_date' => '2022-08-20',
                'to_date' => '2022-08-18',
            ),
            3 => 
            array (
                'emp_no' => 11,
                'salary' => 12545,
                'from_date' => '2022-09-09',
                'to_date' => '2022-09-01',
            ),
        ));
        
        
    }
}