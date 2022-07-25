<?php
declare(strict_types = 1);

namespace App\Helpers;

use PHPUnit\Util\Exception;
use DateTimeInterface, DateTime, DateTimeZone;

class App
{
    private $config = [];

    public function __construct()
    {
        $this->config = config::get('app');
    }

    public function isDebugMode(): bool
    {
        if (!isset($this->config['debug'])){
            return false;
        }
        return $this->config['debug'];
    }

    public function getEnvironment(): string
    {
        if (!isset($this->config['env'])){
            return 'production';
        }
        return $this->isTestMode() ? 'test' : $this->config['env'];
    }

    public function getLogPath(): string
    {
        if (!isset($this->config['log_path'])){
            throw new Exception('Log path is not defined');
        }
        return $this->config['log_path'];
    }

    /**
     * To see if php is running in the command line.
     **/
    public function isRunningFromConsole(): bool
    {
        return php_sapi_name() == 'cli' || php_sapi_name() == 'phpbg';
    }

    /**
     * To get the server time.
     **/
    public function getServerTime(): \DateTimeInterface
    {
        return new DateTime('now', new DateTimeZone('Asia/Dhaka'));
    }

    public function isTestMode()
    {
        if($this->isRunningFromConsole() && defined('PHPUNIT_RUNNING') && PHPUNIT_RUNNING){
            return true;
        }
        return false;
    }
}