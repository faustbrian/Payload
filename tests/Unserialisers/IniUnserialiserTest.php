<?php

namespace BrianFaust\Tests\Payload\Unserialisers;

use BrianFaust\Payload\Unserialisers\IniUnserialiser;

class IniUnserialiserTest extends AbstractTestCase
{
    protected function getInput()
    {
        return 'hello = world';
    }

    protected function getUnserialiser()
    {
        return new IniUnserialiser();
    }
}
