<?php

namespace BrianFaust\Tests\Payload\Serialisers;

use BrianFaust\Payload\Serialisers\YamlSerialiser;

class YamlSerialiserTest extends AbstractTestCase
{
    protected function getExpectedOutput()
    {
        return '{ hello: world }';
    }

    protected function getSerialiser()
    {
        return new YamlSerialiser();
    }
}
