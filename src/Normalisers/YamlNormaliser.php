<?php

namespace BrianFaust\Payload\Normalisers;

use BrianFaust\Payload\Contracts\Normaliser;
use BrianFaust\Payload\Readers\YamlReader;
use BrianFaust\Payload\Serialisers\YamlSerialiser;
use BrianFaust\Payload\Unserialisers\YamlUnserialiser;
use BrianFaust\Payload\Writers\YamlWriter;

class YamlNormaliser implements Normaliser
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

        return $this->serialiser = new YamlSerialiser();
    }

    public function unserialiser()
    {
        if ($this->unserialiser) {
            return $this->unserialiser;
        }

        return $this->unserialiser = new YamlUnserialiser();
    }

    public function writer()
    {
        if ($this->writer) {
            return $this->writer;
        }

        return $this->writer = new YamlWriter();
    }

    public function reader()
    {
        if ($this->reader) {
            return $this->reader;
        }

        return $this->reader = new YamlReader();
    }
}
