<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class GetAllProduct extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'getallproductservice'; // <-- must match provider binding
    }
}