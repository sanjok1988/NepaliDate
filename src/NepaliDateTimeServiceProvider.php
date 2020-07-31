<?php
namespace Sanjok\NepaliDateTime;

use Illuminate\Support\ServiceProvider;

class NepaliDateTimeServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }


    public function register()
    {
        $this->app->make(NepaliDateTime::class);

        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('NepaliDateTime', \Sanjok\NepaliDateTime\Facades\NepaliDateTimeFacade::class);
    }
}
