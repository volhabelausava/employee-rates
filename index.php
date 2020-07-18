<?php

use App\Component\Db;
use \App\Exception\FileNotFoundException;

require __DIR__ . '/autoload.php';

try {
    $db = new Db();
} catch (FileNotFoundException $error) {
    echo $error->getMessage();
} catch (\Exception $error) {
    echo $error->getMessage();
}

echo "Welcome to Front Controller";
