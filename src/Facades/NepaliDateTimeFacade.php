<?php
namespace Sanjok\NepaliDateTime;

use Illuminate\Support\Facades\Facade;

class NepaliDateTimeFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Sanjok\NepaliDateTime\NepaliDateTime::class;
    }
}
