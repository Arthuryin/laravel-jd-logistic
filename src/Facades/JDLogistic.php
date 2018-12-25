<?php

namespace Arthuryinzhen\JDLogistic\Facades;

use Illuminate\Support\Facades\Facade;

class JDLogisticFacade extends Facade {


    protected static function getFacadeAccessor(){
        return 'JDLogistic';
    }
}