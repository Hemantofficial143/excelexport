<?php
namespace Jangid\Export\Facade;

use Illuminate\Support\Facades\Facade;

class Export extends Facade{
    protected static function getFacadeAccessor()
    {
        return 'export';
    }
}