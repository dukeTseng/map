<?php

namespace Duke\Map;

use Illuminate\Support\Facades\Facade;

class MapFacades extends Facade
{
    protected static function getFacadeAccessor()
    {
         return 'mapFacade'; // Container 名稱
    }
}
