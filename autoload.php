<?php
use App\Exception\FileNotFoundException;

spl_autoload_register(
    function($className) {
        $file = __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';
        if (file_exists($file)) {
            require($file);
        } else {
            throw new FileNotFoundException('File is not found: ' . $file);
        }
    }
);