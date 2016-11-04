<?php

namespace BrianFaust\Tests\Payload\Normalisers;

use BrianFaust\Payload\Contracts\Serialiser;
use BrianFaust\Payload\Contracts\Unserialiser;
use BrianFaust\Payload\Readers\Reader;
use BrianFaust\Payload\Writers\Writer;
use PHPUnit_Framework_TestCase as TestCase;

abstract class AbstractTestCase extends TestCase
{
    public function should_return_serialiser()
    {
        $normaliser = $this->getNormaliser();

        $this->assertInstanceOf(Serialiser::class, $normaliser->serialiser());
    }

    public function should_return_unserialiser()
    {
        $normaliser = $this->getNormaliser();

        $this->assertInstanceOf(Unserialiser::class, $normaliser->unserialiser());
    }

    public function should_return_reader()
    {
        $normaliser = $this->getNormaliser();

        $this->assertInstanceOf(Reader::class, $normaliser->reader());
    }

    public function should_return_writer()
    {
        $normaliser = $this->getNormaliser();

        $this->assertInstanceOf(Writer::class, $normaliser->writer());
    }

    abstract protected function getNormaliser();
}
