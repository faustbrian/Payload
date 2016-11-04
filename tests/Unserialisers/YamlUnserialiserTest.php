<?php

namespace BrianFaust\Tests\Payload\Unserialisers;

use BrianFaust\Payload\Unserialisers\YamlUnserialiser;

class YamlUnserialiserTest extends AbstractTestCase
{
    protected function getInput()
    {
        return 'hello: world';
    }

    protected function getUnserialiser()
    {
        return new YamlUnserialiser();
    }
}
