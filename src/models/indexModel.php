<?php

namespace Firework\Models;

use Firework\Core\Model;

class indexModel extends Model
{
    public function get_data()
    {
        return [
            [
                'age' => 25,
                'name'=> 'john'
            ],
            [
                'age' => 20,
                'name'=> 'john'
            ]
        ];
    }
}