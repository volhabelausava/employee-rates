<?php
include __DIR__ . '/Component/Db.php';

try {
    $db = new \App\Component\Db();
} catch (\App\Exception\FileNotFoundException $error) {
    echo $error->getMessage();
} catch (\Exception $error) {
    $error->getMessage();
}

echo "Welcome to Front Controller";
