<?php

use Illuminate\Database\Seeder;

class CombustionVehiculoSeeder extends Seeder
{

    public function run()
    {
        for ($i=1; $i <= 20 ; $i++) { 
            $vehiculo =sisVentas\vehiculo::find($i);
            for ($j=1; $j <=3 ; $j++) { 
            	 $vehiculo->combustions()->attach(rand(1,4));
            }
        }    
    }
}
