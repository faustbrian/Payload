<?php

namespace BrianFaust\Tests\Payload\Unserialisers;

use BrianFaust\Payload\Unserialisers\CsvUnserialiser;

class CsvUnserialiserTest extends AbstractTestCase
{
    public function should_unserialise_input()
    {
        $unserialiser = $this->getUnserialiser();

        $contents = $unserialiser->unserialise($this->getInput());

        $this->assertEquals([['hello'], ['world']], $contents);
    }

    protected function getInput()
    {
        return 'hello
world
';
    }

    protected function getUnserialiser()
    {
        return new CsvUnserialiser();
    }
}
