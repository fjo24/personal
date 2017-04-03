<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PositionTableSeeder::class);
        $this->call(TipoDocsTableSeeder::class);
        $this->call(EmpleadosTableSeeder::class);
        $this->call(PerVentaTableSeeder::class);
        $this->call(UserSeeder::class);
    }
}
