<?php

namespace BrianFaust\Payload\Readers;

use BrianFaust\Payload\Unserialisers\IniUnserialiser;

class IniReader extends Reader
{
    protected $extensions = ['ini'];

    public function read($path, $class = null)
    {
        return (new IniUnserialiser())->unserialise($this->contents($path), $class);
    }
}
