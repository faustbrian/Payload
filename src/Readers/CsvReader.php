<?php



declare(strict_types=1);



namespace BrianFaust\Payload\Readers;

use BrianFaust\Payload\Unserialisers\CsvUnserialiser;

class CsvReader extends Reader
{
    protected $extensions = ['csv'];

    public function read($path, ? string $class) : array
    {
        return (new CsvUnserialiser())->unserialise($this->contents($path), $class);
    }
}
