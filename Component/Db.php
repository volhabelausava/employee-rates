<?php

namespace App\Component;
include __DIR__ . '/../Exception/FileNotFoundException.php';
include __DIR__ . '/../Exception/QueryNotPerformedException.php';
use App\Exception\FileNotFoundException;
use App\Exception\QueryNotPerformedException;

class Db
{
    private $dbHandler;

    /**
     * Db constructor.
     * @throws FileNotFoundException
     */
    public function __construct()
    {
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

    /**
     * @param string $sql
     * @param array $params
     * @throws QueryNotPerformedException
     */
    public function perform(string $sql, array $params = [])
    {
        $sth = $this->dbHandler->prepare($sql);
        if (!$sth->execute($params)) {
            throw new QueryNotPerformedException('Error occurred while executing SQL query.');
        }
    }
}