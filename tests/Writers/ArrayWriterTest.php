<?php

namespace BrianFaust\Tests\Payload\Writers;

use BrianFaust\Payload\Writers\ArrayWriter;

class ArrayWriterTest extends AbstractTestCase
{
    protected function getExpectedOutput()
    {
        return 'hello: world';
    }

    protected function getWriter()
    {
        return new ArrayWriter();
    }
}
