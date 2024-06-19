<?php

namespace App\Router;

use App\Http\Controllers\ExampleControllers;
use Framework\Router\Enum\Method;
use Framework\Router\Route;
use Framework\Router\Routing;

class Api extends Routing
{
    public function handle(): \App\Router\Api
    {
        Route::action(method: Method::GET, path: '/', controller: [ExampleControllers::class, 'actionTest']);

        return $this;
    }
}

