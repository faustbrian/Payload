<?php

namespace BrianFaust\Tests\Payload\Serialisers;

use BrianFaust\Payload\Contracts\Serialiser;
use PHPUnit_Framework_TestCase as TestCase;

abstract class AbstractTestCase extends TestCase
{
    public function should_return_serialiser()
    {
        $serialiser = $this->getSerialiser();

        $this->assertInstanceOf(Serialiser::class, $serialiser);
    }

    public function should_serialise_input()
    {
        $serialiser = $this->getSerialiser();

        $contents = $serialiser->serialise(['hello' => 'world']);

        $this->assertEquals($this->getExpectedOutput(), $contents);
    }

    abstract protected function getSerialiser();

    abstract protected function getExpectedOutput();
}
