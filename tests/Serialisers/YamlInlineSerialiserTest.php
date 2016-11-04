<?php

namespace BrianFaust\Tests\Payload\Serialisers;

use BrianFaust\Payload\Serialisers\YamlInlineSerialiser;

class YamlInlineSerialiserTest extends AbstractTestCase
{
    protected function getExpectedOutput()
    {
        return "hello: world\n";
    }

    protected function getSerialiser()
    {
        return new YamlInlineSerialiser();
    }
}
