<?php

namespace BrianFaust\Payload\Normalisers;

use BrianFaust\Payload\Contracts\Normaliser;
use BrianFaust\Payload\Readers\CsvReader;
use BrianFaust\Payload\Serialisers\CsvSerialiser;
use BrianFaust\Payload\Unserialisers\CsvUnserialiser;
use BrianFaust\Payload\Writers\CsvWriter;

class CsvNormaliser implements Normaliser
{
    protected $serialiser;

    protected $unserialiser;

    protected $writer;

    protected $reader;

    public function serialiser()
    {
        if ($this->serialiser) {
            return $this->serialiser;
        }

        return $this->serialiser = new CsvSerialiser();
    }

    public function unserialiser()
    {
        if ($this->unserialiser) {
            return $this->unserialiser;
        }

        return $this->unserialiser = new CsvUnserialiser();
    }

    public function writer()
    {
        if ($this->writer) {
            return $this->writer;
        }

        return $this->writer = new CsvWriter();
    }

    public function reader()
    {
        if ($this->reader) {
            return $this->reader;
        }

        return $this->reader = new CsvReader();
    }
}
