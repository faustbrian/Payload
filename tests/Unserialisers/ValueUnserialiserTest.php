<?php

namespace BrianFaust\Tests\Payload\Unserialisers;

use BrianFaust\Payload\Unserialisers\ValueUnserialiser;

class ValueUnserialiserTest extends AbstractTestCase
{
    protected function getInput()
    {
        return 'a:1:{s:5:"hello";s:5:"world";}';
    }

    protected function getUnserialiser()
    {
        return new ValueUnserialiser();
    }
}
