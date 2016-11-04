<?php

namespace BrianFaust\Payload\Normalisers;

use BrianFaust\Payload\Contracts\Normaliser;
use BrianFaust\Payload\Readers\JsonReader;
use BrianFaust\Payload\Serialisers\JsonSerialiser;
use BrianFaust\Payload\Unserialisers\JsonUnserialiser;
use BrianFaust\Payload\Writers\JsonWriter;

class JsonNormaliser implements Normaliser
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

        return $this->serialiser = new JsonSerialiser();
    }

    public function unserialiser()
    {
        if ($this->unserialiser) {
            return $this->unserialiser;
        }

        return $this->unserialiser = new JsonUnserialiser();
    }

    public function writer()
    {
        if ($this->writer) {
            return $this->writer;
        }

        return $this->writer = new JsonWriter();
    }

    public function reader()
    {
        if ($this->reader) {
            return $this->reader;
        }

        return $this->reader = new JsonReader();
    }
}
