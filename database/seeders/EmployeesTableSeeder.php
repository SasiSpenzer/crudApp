<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('employees')->delete();
        
        \DB::table('employees')->insert(array (
            0 => 
            array (
                'emp_no' => 1,
                'birth_date' => '2022-08-17',
                'first_name' => 'Sasitha',
                'last_name' => 'Perera',
                'gender' => 'Female',
                'hire_date' => '2022-08-27',
            ),
            1 => 
            array (
                'emp_no' => 2,
                'birth_date' => '2022-08-10',
                'first_name' => 'Access Residencies',
                'last_name' => 'sasas',
                'gender' => 'Male',
                'hire_date' => '2022-05-29',
            ),
            2 => 
            array (
                'emp_no' => 3,
                'birth_date' => '2022-08-02',
                'first_name' => 'Access Residenciessas',
                'last_name' => 'sasasdwd',
                'gender' => 'Male',
                'hire_date' => '2022-05-29',
            ),
            3 => 
            array (
                'emp_no' => 4,
                'birth_date' => '2022-08-31',
                'first_name' => 'Test User',
                'last_name' => 'Again Added',
                'gender' => 'Male',
                'hire_date' => '2022-05-29',
            ),
            4 => 
            array (
                'emp_no' => 5,
                'birth_date' => '2022-08-09',
                'first_name' => 'Access Residenciesas',
                'last_name' => 'sasasdwd',
                'gender' => 'Male',
                'hire_date' => '2022-08-24',
            ),
            5 => 
            array (
                'emp_no' => 6,
                'birth_date' => '2022-08-10',
                'first_name' => 'Access Residencies',
                'last_name' => 'saewr',
                'gender' => 'Female',
                'hire_date' => '2022-05-29',
            ),
            6 => 
            array (
                'emp_no' => 7,
                'birth_date' => '2022-08-17',
                'first_name' => 'Access Residencies',
                'last_name' => 'sasas',
                'gender' => 'Male',
                'hire_date' => '2022-08-10',
            ),
            7 => 
            array (
                'emp_no' => 8,
                'birth_date' => '2022-08-10',
                'first_name' => 'Access Residencies',
                'last_name' => 'sasas',
                'gender' => 'Male',
                'hire_date' => '2022-08-24',
            ),
            8 => 
            array (
                'emp_no' => 9,
                'birth_date' => '2022-08-10',
                'first_name' => 'Access Residencies',
                'last_name' => 'sasas',
                'gender' => 'Male',
                'hire_date' => '2022-08-10',
            ),
            9 => 
            array (
                'emp_no' => 10,
                'birth_date' => '2022-08-10',
                'first_name' => 'Access Residencies',
                'last_name' => 'sasas',
                'gender' => 'Male',
                'hire_date' => '2022-08-24',
            ),
            10 => 
            array (
                'emp_no' => 11,
                'birth_date' => '2022-08-10',
                'first_name' => 'Access Residencies',
                'last_name' => 'sasas',
                'gender' => 'Male',
                'hire_date' => '2022-08-11',
            ),
            11 => 
            array (
                'emp_no' => 12,
                'birth_date' => '2022-08-10',
                'first_name' => 'Access Residencies',
                'last_name' => 'sasas',
                'gender' => 'Male',
                'hire_date' => '2022-05-29',
            ),
            12 => 
            array (
                'emp_no' => 13,
                'birth_date' => '2022-08-18',
                'first_name' => 'Test',
                'last_name' => 'One',
                'gender' => 'Male',
                'hire_date' => '2022-08-30',
            ),
        ));
        
        
    }
}