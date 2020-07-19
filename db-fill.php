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

$sql = 'INSERT INTO employees (name) VALUES (\'John\');
        INSERT INTO employees (name) VALUES (\'Jane\');
        INSERT INTO employees (name) VALUES (\'David\');
        INSERT INTO employees (name) VALUES (\'Kate\');
        INSERT INTO employees (name) VALUES (\'Robert\');
        INSERT INTO time_reports (employee_id, hours, date) VALUES (1, 2.54, \'7/1/2020\');
        INSERT INTO time_reports (employee_id, hours, date) VALUES (2, 8.25, \'7/1/2020\');
        INSERT INTO time_reports (employee_id, hours, date) VALUES (3, 5.32, \'7/1/2020\');
        INSERT INTO time_reports (employee_id, hours, date) VALUES (4, 2.8, \'7/1/2020\');
        INSERT INTO time_reports (employee_id, hours, date) VALUES (5, 6.23, \'7/1/2020\');
        INSERT INTO time_reports (employee_id, hours, date) VALUES (3, 8.1, \'7/2/2020\');
        INSERT INTO time_reports (employee_id, hours, date) VALUES (4, 6, \'7/2/2020\');
        INSERT INTO time_reports (employee_id, hours, date) VALUES (1, 6.87, \'7/3/2020\');
        INSERT INTO time_reports (employee_id, hours, date) VALUES (2, 5.3, \'7/3/2020\');
        INSERT INTO time_reports (employee_id, hours, date) VALUES (3, 4.62, \'7/3/2020\');
        INSERT INTO time_reports (employee_id, hours, date) VALUES (5, 6.25, \'7/3/2020\');
        INSERT INTO time_reports (employee_id, hours, date) VALUES (4, 7.5, \'7/4/2020\');
        INSERT INTO time_reports (employee_id, hours, date) VALUES (5, 6.43, \'7/4/2020\');
        INSERT INTO time_reports (employee_id, hours, date) VALUES (1, 8, \'7/6/2020\');
        INSERT INTO time_reports (employee_id, hours, date) VALUES (2, 1.45, \'7/6/2020\');
        INSERT INTO time_reports (employee_id, hours, date) VALUES (3, 5.9, \'7/6/2020\');
        INSERT INTO time_reports (employee_id, hours, date) VALUES (4, 2.8, \'7/6/2020\');
        INSERT INTO time_reports (employee_id, hours, date) VALUES (5, 4.9, \'7/6/2020\');
        INSERT INTO time_reports (employee_id, hours, date) VALUES (1, 6.3, \'7/7/2020\');
        INSERT INTO time_reports (employee_id, hours, date) VALUES (4, 6.1, \'7/7/2020\');
        INSERT INTO time_reports (employee_id, hours, date) VALUES (2, 8.6, \'7/8/2020\');
        INSERT INTO time_reports (employee_id, hours, date) VALUES (3, 7.6, \'7/8/2020\');
        INSERT INTO time_reports (employee_id, hours, date) VALUES (4, 6.32, \'7/8/2020\');
        INSERT INTO time_reports (employee_id, hours, date) VALUES (2, 4.58, \'7/9/2020\');
        INSERT INTO time_reports (employee_id, hours, date) VALUES (3, 7.62, \'7/9/2020\');
        INSERT INTO time_reports (employee_id, hours, date) VALUES (1, 6.45, \'7/11/2020\');
        INSERT INTO time_reports (employee_id, hours, date) VALUES (2, 3.45, \'7/11/2020\');
        INSERT INTO time_reports (employee_id, hours, date) VALUES (3, 8.65, \'7/11/2020\');
        INSERT INTO time_reports (employee_id, hours, date) VALUES (4, 10, \'7/11/2020\');
        INSERT INTO time_reports (employee_id, hours, date) VALUES (5, 3.25, \'7/11/2020\')
        ';
try {
    $db->perform($sql);
} catch (QueryNotPerformedException $error) {
    echo $error->getMessage();
}