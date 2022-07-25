<?php

namespace App\Contracts;

interface LoggerInterface
{
    /**
     * psr-3 logger methods || See the psr-3 documentation
     */

    public function emergency(string $message, array $context = []);
    public function alert(string $message, array $context = []);
    public function critical(string $message, array $context = []);
    public function error(string $message, array $context = []);
    public function warning(string $message, array $context = []);
    public function notice(string $message, array $context = []);
    public function info(string $message, array $context = []);
    public function debug(string $message, array $context = []);
    public function log(string $level, string $message, array $context = []);


}