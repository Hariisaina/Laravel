<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Prof;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */


public function boot()
{
    View::composer(['prof.prof', 'pointage.pointprof'], function ($view) {
        $profs = Prof::all(); // Ou utilisez n'importe quelle logique pour récupérer la liste des professeurs
        $view->with('profs', $profs);
    });
    View::composer(['prof.prof', 'pointage.pointage'], function ($view) {
        $profs = Prof::all(); // Ou utilisez n'importe quelle logique pour récupérer la liste des professeurs
        $view->with('profs', $profs);
    });
    View::composer(['prof.prof', 'paiement.facture'], function ($view) {
        $profs = Prof::all(); // Ou utilisez n'importe quelle logique pour récupérer la liste des professeurs
        $view->with('profs', $profs);
    });
    View::composer(['prof.prof', 'paiement.paiementprof'], function ($view) {
        $profs = Prof::all(); // Ou utilisez n'importe quelle logique pour récupérer la liste des professeurs
        $view->with('profs', $profs);
    });


}

}
