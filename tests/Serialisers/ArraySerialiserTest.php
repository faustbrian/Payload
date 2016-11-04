<?php

namespace BrianFaust\Tests\Payload\Serialisers;

use BrianFaust\Payload\Serialisers\ArraySerialiser;

class ArraySerialiserTest extends AbstractTestCase
{
    protected function getExpectedOutput()
    {
        return "array (
  'hello' => 'world',
)";
    }

    protected function getSerialiser()
    {
        return new ArraySerialiser();
    }
}
