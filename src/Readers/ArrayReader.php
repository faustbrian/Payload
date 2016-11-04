<?php

namespace BrianFaust\Payload\Readers;

use BrianFaust\Payload\Unserialisers\ArrayUnserialiser;

class ArrayReader extends Reader
{
    protected $extensions = ['php'];

    public function read($path, $class = null)
    {
        return (new ArrayUnserialiser())->unserialise($this->get($path), $class);
    }
}
