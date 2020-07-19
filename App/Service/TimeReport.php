<?php

namespace App\Service;

use App\Component\Db;
use App\Exception\FileNotFoundException;
use App\Exception\QueryNotPerformedException;

class TimeReport
{
    const TOP_EMPLOYEES_QUANTITY = 3;
    const WEEKDAYS = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

    /**
     * Method finds top employees and their average working hours per every weekday
     * @return array
     * @throws FileNotFoundException
     * @throws QueryNotPerformedException
     *
     */
    public static function findTopEmployees()
    {
        $db = new Db();
        $sql = '
            SELECT name, ROUND(AVG(hours), 2) as avg FROM time_reports
            LEFT JOIN employees on time_reports.employee_id = employees.id
            WHERE WEEKDAY(STR_TO_DATE(date, \'%m/%d/%Y\')) =:weekday
            GROUP BY name
            ORDER BY avg DESC
            LIMIT ' . self::TOP_EMPLOYEES_QUANTITY;

        $topEmployees = [];
        foreach (self::WEEKDAYS as $num => $weekday) {
            $topEmployeesPerWeekday = $db->query($sql, [':weekday' => $num]);
            $topEmployees[$weekday] = $topEmployeesPerWeekday;
        }

        return $topEmployees;
    }
}