<?php

namespace BrianFaust\Payload\Readers;

use BrianFaust\Payload\Unserialisers\YamlUnserialiser;

class YamlReader extends Reader
{
    protected $extensions = ['yaml', 'yml'];

    public function read($path, $class = null)
    {
        return (new YamlUnserialiser())->unserialise($this->contents($path), $class);
    }
}
