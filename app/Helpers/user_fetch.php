<?php

use App\Services\Getallproductservice;

if (!function_exists('users_count')) {
    function users_count()
    {
        return app(Getallproductservice::class)->getfunction();
    }
}
