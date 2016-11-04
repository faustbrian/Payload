<?php

namespace BrianFaust\Tests\Payload\Writers;

use BrianFaust\Payload\Writers\ValueWriter;

class ValueWriterTest extends AbstractTestCase
{
    protected function getExpectedOutput()
    {
        return 'hello: world';
    }

    protected function getWriter()
    {
        return new ValueWriter();
    }
}
