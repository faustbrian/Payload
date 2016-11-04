<?php

namespace BrianFaust\Tests\Payload\Serialisers;

use BrianFaust\Payload\Serialisers\ValueSerialiser;

class ValueSerialiserTest extends AbstractTestCase
{
    protected function getExpectedOutput()
    {
        return 'a:1:{s:5:"hello";s:5:"world";}';
    }

    protected function getSerialiser()
    {
        return new ValueSerialiser();
    }
}
