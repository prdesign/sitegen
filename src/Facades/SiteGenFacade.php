<?php

namespace PRDesign\SiteGen;

use Illuminate\Support\Facades\Facade;

class SiteGenFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'site-gen';
    }
}