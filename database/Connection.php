<?php

namespace DB;

use PDO;
use PDOException;
use DB\Builder\Helper;

class Connection
{
    use Helper;
    private $connection;

    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";

        try {
            $this->connection = new PDO("mysql:host=$servername;dbname=php_oop", $username, $password);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    protected static function init()
    {
        return new self;
    }

    protected function run($query, $values, $toArray = false, $select, $insert, $update)
    {
        $stmt = $this->connection->prepare($query);

        foreach ($values as $column => &$value) {
            $stmt->bindParam(":$column", $value, PDO::PARAM_STR);
        }

        $stmt->execute();

        try {
            if ($select === true) {
                return $toArray ? $this->filterNumberKeys($stmt->fetchAll()) : $stmt->fetchObject();
            } else if ($insert === true) {
                return "New record created successfully";
            } else if ($update === true) {
                return $stmt->rowCount() . " records UPDATED successfully";
            } else {
                return "Record deleted successfully";
            }
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
