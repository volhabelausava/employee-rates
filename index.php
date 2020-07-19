<?php

use App\Model\TimeReport;
use App\Service\FormatData;
use App\PrintOutput;
use App\Exception\FileNotFoundException;
use App\Exception\QueryNotPerformedException;

require __DIR__ . '/autoload.php';

try {
    $timeReport = TimeReport::findTopEmployees();
    $formattedReport = FormatData::getFormattedData($timeReport);
    PrintOutput::ToCommandLine($formattedReport);
} catch (FileNotFoundException $error) {
    echo $error->getMessage();
} catch (QueryNotPerformedException $error) {
    echo $error->getMessage();
} catch (\Exception $error) {
    echo 'Unexpected error is occurred: ' . $error->getMessage();
}
