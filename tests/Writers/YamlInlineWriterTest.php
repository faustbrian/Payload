<?php

namespace BrianFaust\Tests\Payload\Writers;

use BrianFaust\Payload\Writers\YamlInlineWriter;

class YamlInlineWriterTest extends AbstractTestCase
{
    protected function getExpectedOutput()
    {
        return 'hello: world';
    }

    protected function getWriter()
    {
        return new YamlInlineWriter();
    }
}
