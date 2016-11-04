<?php

namespace BrianFaust\Payload\Readers;

use BrianFaust\Payload\Unserialisers\ValueUnserialiser;

class ValueReader extends Reader
{
    protected $extensions = ['ser'];

    public function read($path, $class = null)
    {
        return (new ValueUnserialiser())->unserialise($this->contents($path), $class);
    }
}
