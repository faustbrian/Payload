<?php

namespace BrianFaust\Tests\Payload\Writers;

use BrianFaust\Payload\Writers\IniWriter;

class IniWriterTest extends AbstractTestCase
{
    protected function getExpectedOutput()
    {
        return 'hello: world';
    }

    protected function getWriter()
    {
        return new IniWriter();
    }
}
