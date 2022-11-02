<?php

namespace Firework\Core;

use Firework\Router\Router;

require_once 'vendor/autoload.php';

class Bootstrap
{
    public function __construct()
    {
        Router::route();
    }
}