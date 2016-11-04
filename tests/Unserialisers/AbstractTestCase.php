<?php

namespace BrianFaust\Tests\Payload\Unserialisers;

use BrianFaust\Payload\Contracts\Unserialiser;
use PHPUnit_Framework_TestCase as TestCase;

abstract class AbstractTestCase extends TestCase
{
    public function should_return_unserialiser()
    {
        $unserialiser = $this->getUnserialiser();

        $this->assertInstanceOf(Unserialiser::class, $unserialiser);
    }

    public function should_unserialise_input()
    {
        $unserialiser = $this->getUnserialiser();

        $contents = $unserialiser->unserialise($this->getInput());

        $this->assertEquals(['hello' => 'world'], $contents);
    }

    abstract protected function getUnserialiser();

    abstract protected function getInput();
}
