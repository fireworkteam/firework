<?php

namespace Firework\Core;

use Firework\Env\Env;
use \PDO;
use \PDOException;

class Connection {
    public $link;
    private $dsn, $username, $password;

    public function __construct()
    {
        $env = (new Env())->getEnv();

        $this->dsn = $env['DATABASE_DRIVER'] . ":host=" . $env['DATABASE_HOST'] . ";dbname=" . $env['DATABASE_NAME_DEFAULT'];
        $this->username = $env['DATABASE_USER'];
        $this->password = $env['DATABASE_PASSWORD'];

        $this->connect();
    }

    private function connect()
    {
        try {
            $this->link = new PDO($this->dsn, $this->username, $this->password);
        } catch (PDOException $e) {
            print_r("ERROR: " . $e->getMessage());
            die();
        }
    }
}