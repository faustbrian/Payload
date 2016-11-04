<?php

namespace BrianFaust\Payload\Readers;

use BrianFaust\Payload\Unserialisers\JsonUnserialiser;

class JsonReader extends Reader
{
    protected $extensions = ['json'];

    public function read($path, $class = null)
    {
        return (new JsonUnserialiser())->unserialise($this->contents($path), $class);
    }
}
