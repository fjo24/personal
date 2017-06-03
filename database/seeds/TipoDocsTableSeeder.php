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
        factory(sisVentas\Tipo_docs::class, 5)->create();
}
}
