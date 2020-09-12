<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

use App\Models\Modulo;

class AppServiceProvider extends ServiceProvider
{



    private  $idmoduloCatalogo=1;
    private $moduloCatalogo;


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         $submoduloCatalogo = 
                    DB::table('modulo')
                            ->join('submodulo','submodulo.idmodulo','modulo.idmodulo')
                            ->select('submodulo.*')
                            ->where('modulo.idmodulo',$this->idmoduloCatalogo)
                            ->get();
        $this->moduloCatalogo=
                DB::table('modulo')
                            ->select('modulo.*')
                            ->where('modulo.idmodulo',$this->idmoduloCatalogo)
                            ->first();

        $this->moduloCatalogo->submodulos=$submoduloCatalogo;

        View::share('moduloCatalogo',$this->moduloCatalogo);
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}
