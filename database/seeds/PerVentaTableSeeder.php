<?php

use Illuminate\Database\Seeder;

class PerVentaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(sisVentas\Per_ventas::class, 10)->create();
    }
}
