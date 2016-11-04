<?php

namespace BrianFaust\Tests\Payload\Serialisers;

use BrianFaust\Payload\Serialisers\CsvSerialiser;

class CsvSerialiserTest extends AbstractTestCase
{
    protected function getExpectedOutput()
    {
        return 'hello
world
';
    }

    protected function getSerialiser()
    {
        return new CsvSerialiser();
    }
}
