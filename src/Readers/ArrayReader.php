<?php



declare(strict_types=1);



namespace BrianFaust\Payload\Readers;

use BrianFaust\Payload\Unserialisers\ArrayUnserialiser;

class ArrayReader extends Reader
{
    protected $extensions = ['php'];

    public function read($path, ? string $class) : array
    {
        return (new ArrayUnserialiser())->unserialise($this->get($path), $class);
    }
}
