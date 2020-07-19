<?php

namespace App;

class PrintOutput
{
    /**
     * Print data to browser
     * @param $output
     */
    public static function ToBrowser($output)
    {
        echo '<pre>' . $output . '</pre>';
    }

    /**
     * Print data to browser's console
     * @param $output
     */
    public static function ToConsole($output)
    {
        echo '<script> console.log(' . json_encode($output) . ')</script>';
    }

    /**
     * Print data to command line
     * @param $output
     */
    public static function ToCommandLine($output)
    {
        echo $output;
    }
}
