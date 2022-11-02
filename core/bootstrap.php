<?php

namespace Firework\Core;

use Firework\Router\Router;

class Bootstrap
{
    public function __construct()
    {
        Router::route();
    }
}