<?php
declare(strict_types = 1);

namespace App\Helpers;

use PHPUnit\Exception;

class Config
{
    public static function get(string $filename, string $key = null)
    {
        $fileContent = self::getFileContent($filename);
        if ($key === null){
            return $fileContent;
        }
        return isset($fileContent[$key]) ? $fileContent[$key] : [];
    }

    public static function getFileContent(string $filename): array
    {
        $fileContent = [];

        try {
            $path = realpath(sprintf(__DIR__. '/../Configs/%s.php', $filename));
            if (file_exists($path)){
                $fileContent = require $path;
            }
        }catch (Exception $exception){
            die($exception->getMessage());
        }

        return $fileContent;
    }
}