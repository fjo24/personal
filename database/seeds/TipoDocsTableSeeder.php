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
        factory(App\Tipo_docs::class, 20)->create();
    }
}
