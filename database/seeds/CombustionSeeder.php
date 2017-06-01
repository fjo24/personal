<?php

use Illuminate\Database\Seeder;

class CombustionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('combustion')->insert([
            'nombre' => 'GAS',
]);
        DB::table('combustion')->insert([
            'nombre' => 'GLP',
]);
        DB::table('combustion')->insert([
            'nombre' => 'GNV',
]);
        DB::table('combustion')->insert([
            'nombre' => 'PETROLEO',
]);

    }
}
