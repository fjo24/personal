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
        factory(App\Per_ventas::class, 100)->create();
    }
}
