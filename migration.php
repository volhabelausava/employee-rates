<?php

use App\Component\Db;
use App\Exception\FileNotFoundException;
use App\Exception\QueryNotPerformedException;

require __DIR__ . '/autoload.php';

try {
    $db = new Db();
} catch (FileNotFoundException $error) {
    echo $error->getMessage();
} catch (\Exception $error) {
    echo $error->getMessage();
}

$sql = 'CREATE TABLE employees (
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            name VARCHAR(128) NOT NULL
        );
        CREATE TABLE time_reports (
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            employee_id INT NOT NULL,
            hours FLOAT NOT NULL,
            date VARCHAR(10),
            FOREIGN KEY (employee_id) REFERENCES employees(id)
        )';
try {
    $db->perform($sql);
} catch (QueryNotPerformedException $error) {
    echo $error->getMessage();
}
