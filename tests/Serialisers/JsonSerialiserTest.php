<?php

namespace BrianFaust\Tests\Payload\Serialisers;

use BrianFaust\Payload\Serialisers\JsonSerialiser;

class JsonSerialiserTest extends AbstractTestCase
{
    protected function getExpectedOutput()
    {
        return '{"hello":"world"}';
    }

    protected function getSerialiser()
    {
        return new JsonSerialiser();
    }
}
