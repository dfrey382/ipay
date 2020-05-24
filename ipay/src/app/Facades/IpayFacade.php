<?php

namespace dsc\ipay\app\Facades;

use Illuminate\Support\Facades\Facade;

class IpayFacade extends Facade{
    protected static function getFacadeAccessor(){
        return 'ipay-facade';
    }
}