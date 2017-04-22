<?php



declare(strict_types=1);



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

    public function serialiser(): JsonSerialiser
    {
        if ($this->serialiser) {
            return $this->serialiser;
        }

        return $this->serialiser = new JsonSerialiser();
    }

    public function unserialiser(): JsonUnserialiser
    {
        if ($this->unserialiser) {
            return $this->unserialiser;
        }

        return $this->unserialiser = new JsonUnserialiser();
    }

    public function writer(): JsonWriter
    {
        if ($this->writer) {
            return $this->writer;
        }

        return $this->writer = new JsonWriter();
    }

    public function reader(): JsonReader
    {
        if ($this->reader) {
            return $this->reader;
        }

        return $this->reader = new JsonReader();
    }
}
