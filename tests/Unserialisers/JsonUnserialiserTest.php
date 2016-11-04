<?php

namespace BrianFaust\Tests\Payload\Unserialisers;

use BrianFaust\Payload\Unserialisers\JsonUnserialiser;

class JsonUnserialiserTest extends AbstractTestCase
{
    protected function getInput()
    {
        return '{"hello":"world"}';
    }

    protected function getUnserialiser()
    {
        return new JsonUnserialiser();
    }
}
