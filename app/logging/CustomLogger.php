<?php

namespace App\Logging;
use Log;
use Monolog\Logger;

class CustomLogger
{
    /**
     * Create a custom Monolog instance.
     *
     * @param  array  $config
     * @return \Monolog\Logger
     */
    public static function log($log)
    {
        Log::channel('customlog')->info($log);
    }
}