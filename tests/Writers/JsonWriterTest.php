<?php

namespace BrianFaust\Tests\Payload\Writers;

use BrianFaust\Payload\Writers\JsonWriter;

class JsonWriterTest extends AbstractTestCase
{
    protected function getExpectedOutput()
    {
        return 'hello: world';
    }

    protected function getWriter()
    {
        return new JsonWriter();
    }
}
