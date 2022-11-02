<?php

namespace Firework\Core;
use \PDO;

abstract class Model
{
    protected $connection;

    public function __construct()
    {
        $this->connection = (new Connection())->link;
    }

    public function get($subject, $from, $where = null) {
        $sql = "SELECT " . $subject . " FROM `" . $from;

        if($where != null) {
            $sql .= "` WHERE " . http_build_query($where, '', "' AND ");
            $sql = str_replace("=", "='", $sql) . "'";

        }

        $query = $this->connection->prepare($sql);
        $query->execute();

        $data = $query->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public function set($into, $data) {
        $sql = "INSERT INTO `" . $into . "` (";

        for ($i = 0; $i < count($data); $i++) {
            $sql .= key($data) . ", ";
            next($data);
        }

        $sql = substr($sql, 0, -2) . ") VALUES (";

        $data = array_values($data);

        for ($i = 0; $i < count($data); $i++) {
            $val = "'" . $data[$i] . "', ";
            $sql .= $val;
        }

        $sql = substr($sql, 0, -2) . ")";

        $query = $this->connection->prepare($sql);
        $result = $query->execute();

        return($result);
    }
}