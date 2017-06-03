<?php

namespace sisVentas\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use sisVentas\Http\ViewComposers\MakeModelForm;

class MakeModelProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view::composer(['hr.vehiculos.create', 'hr.vehiculos.edit'], 'sisVentas\Http\ViewComposers\MakeModelForm');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
