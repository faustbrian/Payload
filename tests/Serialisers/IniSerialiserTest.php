<?php

namespace BrianFaust\Tests\Payload\Serialisers;

use BrianFaust\Payload\Serialisers\IniSerialiser;

class IniSerialiserTest extends AbstractTestCase
{
    protected function getExpectedOutput()
    {
        return 'hello = world';
    }

    protected function getSerialiser()
    {
        return new IniSerialiser();
    }
}
