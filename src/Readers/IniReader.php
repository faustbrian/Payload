<?php



declare(strict_types=1);



namespace BrianFaust\Payload\Readers;

use BrianFaust\Payload\Unserialisers\IniUnserialiser;

class IniReader extends Reader
{
    protected $extensions = ['ini'];

    public function read($path, ? string $class) : array
    {
        return (new IniUnserialiser())->unserialise($this->contents($path), $class);
    }
}
