<?php

namespace BrianFaust\Tests\Payload\Writers;

use BrianFaust\Payload\Writers\YamlWriter;

class YamlWriterTest extends AbstractTestCase
{
    protected function getExpectedOutput()
    {
        return 'hello: world';
    }

    protected function getWriter()
    {
        return new YamlWriter();
    }
}
