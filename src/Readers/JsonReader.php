<?php



declare(strict_types=1);



namespace BrianFaust\Payload\Readers;

use BrianFaust\Payload\Unserialisers\JsonUnserialiser;

class JsonReader extends Reader
{
    protected $extensions = ['json'];

    public function read($path, ? string $class) : array
    {
        return (new JsonUnserialiser())->unserialise($this->contents($path), $class);
    }
}
