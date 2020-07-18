<?php

namespace App\Component;
include __DIR__ . '/../Exception/FileNotFoundException.php';
use App\Exception\FileNotFoundException;

class Db
{
    private $dbHandler;

    public function __construct() {
        $configFile = __DIR__ . '/../config.php';
        if (file_exists($configFile)) {
            $config = include $configFile;
        } else {
            throw new FileNotFoundException('Database configuration file is not found.');
        }

        $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'];
        $user = $config['user'];
        $password = $config['password'];

        try {
            $this->dbHandler = new \PDO($dsn, $user, $password);
        } catch (\PDOException $e) {
            echo 'Connection to database is failed: ' . $e->getMessage();
        }
    }
}