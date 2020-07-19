<?php

use \App\Exception\FileNotFoundException;
use App\Exception\QueryNotPerformedException;
use App\Service\TimeReport;

require __DIR__ . '/autoload.php';

try {
    $timeReport = TimeReport::findTopEmployees();
    var_dump($timeReport);
} catch (FileNotFoundException $error) {
    echo $error->getMessage();
} catch (QueryNotPerformedException $error) {
    echo $error->getMessage();
}catch (\Exception $error) {
    echo $error->getMessage();
}
