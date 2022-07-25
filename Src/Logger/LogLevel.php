<?php

namespace App\Logger;

class LogLevel
{
    /**
     * Just defining constants that are going to corresponds to all levels from App\Contracts\LoggerInterface;
     */

    const DEBUG = 'debug';
    const INFO = 'info';
    const NOTICE = 'notice';
    const WARNING = 'warning';
    const ERROR = 'error';
    const CRITICAL = 'critical';
    const ALERT = 'alert';
    const EMERGENCY = 'emergency';

}