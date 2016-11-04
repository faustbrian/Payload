<?php

namespace BrianFaust\Payload\Readers;

use BrianFaust\Payload\Unserialisers\XmlUnserialiser;

class XmlReader extends Reader
{
    protected $extensions = ['xml'];

    public function read($path, $class = null)
    {
        return (new XmlUnserialiser())->unserialise($this->contents($path), $class);
    }
}
