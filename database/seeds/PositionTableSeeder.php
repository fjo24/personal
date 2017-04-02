<?php

use Illuminate\Database\Seeder;

class PositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 2; $i++) {
            DB::table('position')->insert([
                'name' => str_random(10),
                'condicion' => rand(0,1),
            ]);
        }

    }
}
