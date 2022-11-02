<?php

namespace Firework\Core;

class View
{
    public function generate($contentView, $templateView, $data = null)
    {
        require_once $templateView;
    }
}