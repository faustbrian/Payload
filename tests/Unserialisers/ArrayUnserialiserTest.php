<?php

namespace BrianFaust\Tests\Payload\Unserialisers;

use BrianFaust\Payload\Unserialisers\ArrayUnserialiser;

class ArrayUnserialiserTest extends AbstractTestCase
{
    protected function getInput()
    {
        return "array ( 'hello' => 'world', )";
    }

    protected function getUnserialiser()
    {
        return new ArrayUnserialiser();
    }
}
