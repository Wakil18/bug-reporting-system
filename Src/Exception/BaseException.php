<?php
declare(strict_types = 1);

namespace App\Exception;

use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;

abstract class BaseException extends \Exception
{
    protected $data = [];

    public function __construct(
        string $message = "",
        array $data = [],
        int $code = 0,
        Throwable $previous = null
    )
    {
        $this->data = $data;
        parent::__construct($message, $code, $previous);
    }

    public function setData(string $key, $value): void
    {
        $this->data[$key] = $value;
    }

    public function getExtraData(): array
    {
        if(count($this->data) === 0){
            return $this->data;
        }
        return json_encode(json_decode($this->data). true);
    }
}