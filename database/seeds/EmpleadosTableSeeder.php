<?php

use Illuminate\Database\Seeder;

class EmpleadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 30; $i++) {
            DB::table('hr_per_people_inf')->insert([
                'FIRST_NAME' => str_random(5),
                'SECOND_NAME' => str_random(5),
                'first_LAST_NAME' => str_random(5),
                'SECOND_LAST_NAME' => str_random(5),
                'DATE_OF_BIRTH' => date('yyyy/mmm/dd'),
                'SEX'=> array_rand(['M','F']),
                'EMPLOYEE_NUMBER' => $i,
                'EFFECTIVE_START_DATE' => date('yyyy/mmm/dd'),
                'EFFECTIVE_END_DATE' => date('yyyy/mmm/dd'),
                'SALARY' => random_int(1, 100),
                'SOLD_MIN' => random_int(1, 100),
                'DISCCOUNT' => random_int(1, 100),
                'EMAIL_ADDRESS' => str_random(5).'@gmail.com',
                'COUNTRY' => str_random(50),
                'ADDRESS' => str_random(50),
                'TELEF1' => random_int(17645, 18456),
                'TELEF2' => random_int(4567, 56745),
                'ADDRESS' => str_random(50),
            ]);
        }
    }
}
