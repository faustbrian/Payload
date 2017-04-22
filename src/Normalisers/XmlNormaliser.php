<?php



declare(strict_types=1);



namespace BrianFaust\Payload\Normalisers;

use BrianFaust\Payload\Contracts\Normaliser;
use BrianFaust\Payload\Readers\XmlReader;
use BrianFaust\Payload\Serialisers\XmlSerialiser;
use BrianFaust\Payload\Unserialisers\XmlUnserialiser;
use BrianFaust\Payload\Writers\XmlWriter;

class XmlNormaliser implements Normaliser
{
    protected $serialiser;

    protected $unserialiser;

    protected $writer;

    protected $reader;

    public function serialiser(): XmlSerialiser
    {
        if ($this->serialiser) {
            return $this->serialiser;
        }

        return $this->serialiser = new XmlSerialiser();
    }

    public function unserialiser(): XmlUnserialiser
    {
        if ($this->unserialiser) {
            return $this->unserialiser;
        }

        return $this->unserialiser = new XmlUnserialiser();
    }

    public function writer(): XmlWriter
    {
        if ($this->writer) {
            return $this->writer;
        }

        return $this->writer = new XmlWriter();
    }

    public function reader(): XmlReader
    {
        if ($this->reader) {
            return $this->reader;
        }

        return $this->reader = new XmlReader();
    }
}
