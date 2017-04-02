<?php

use Illuminate\Database\Seeder;

class TipoDocsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 2; $i++) {
            DB::table('tipo_docs')->insert([
                'codigo' => str_random(5),
                'nombre' => str_random(10),
            ]);
        }
    }
}
