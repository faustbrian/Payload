<?php



declare(strict_types=1);



namespace BrianFaust\Payload\Readers;

use BrianFaust\Payload\Unserialisers\ValueUnserialiser;

class ValueReader extends Reader
{
    protected $extensions = ['ser'];

    public function read($path, ? string $class) : array
    {
        return (new ValueUnserialiser())->unserialise($this->contents($path), $class);
    }
}
