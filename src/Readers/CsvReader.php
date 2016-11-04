<?php

namespace BrianFaust\Payload\Readers;

use BrianFaust\Payload\Unserialisers\CsvUnserialiser;

class CsvReader extends Reader
{
    protected $extensions = ['csv'];

    public function read($path, $class = null)
    {
        return (new CsvUnserialiser())->unserialise($this->contents($path), $class);
    }
}
