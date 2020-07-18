<?php
include __DIR__ . '/Component/Db.php';

try {
    $db = new \App\Component\Db();
} catch (\App\Exception\FileNotFoundException $error) {
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
} catch (\App\Exception\QueryNotPerformedException $error) {
    echo $error->getMessage();
}
