<?php


namespace App\Service;

use App\Model\TimeReport;

class FormatData
{
    /**
     * Convert input array to string ready to output
     * @param array $timeReport
     * @return string
     */
    public static function getFormattedData(array $timeReport) {

        $topEmployees = [];
        foreach ($timeReport as $weekday => $topEmployeesPerWeekday)
            $topEmployees[$weekday] = implode(
                ', ',
                self::convertEachEmployeeDataToString($topEmployeesPerWeekday)
            );

        return self::setOutputFormat($topEmployees);
    }

    /**
     * Convert each employee data to specified string (for one weekday).
     * @param array $employeesData
     * @return array
     */
    private static function convertEachEmployeeDataToString(array $employeesData)
    {
        $convertedEmployeesData = [];
        foreach ($employeesData as $employeeData) {
            $convertedEmployeesData[] = $employeeData['name'] . ' (' . (float) $employeeData['avg'] . ' hours)';
        }
        return $convertedEmployeesData;
    }

    /**
     * Convert data to output string
     * @param array $topEmployees
     * @return string
     */
    private static function setOutputFormat(array $topEmployees)
    {
        $maxLengthEmployeesData = self::getMaxStringLengthFromArray($topEmployees);
        $maxLengthWeekday = self::getMaxStringLengthFromArray(TimeReport::WEEKDAYS);

        $output = [];
        foreach ($topEmployees as $weekday => $employeeData) {
            $output[] = '| ' . str_pad($weekday, $maxLengthWeekday) .
                       ' | ' . str_pad($employeeData, $maxLengthEmployeesData) . ' |';
        }

        return implode("\n", $output);
    }

    /**
     * Calculate length of the longest string from given array
     * @param array $array
     * @return mixed
     */
    private static function getMaxStringLengthFromArray(array $array)
    {
        return max(
            array_map(
                function($item) {
                    return strlen($item);
                },
                $array
            )
        );
    }
}
