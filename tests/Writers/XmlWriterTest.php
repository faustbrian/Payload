<?php

namespace BrianFaust\Tests\Payload\Writers;

use BrianFaust\Payload\Writers\XmlWriter;

class XmlWriterTest extends AbstractTestCase
{
    protected function getExpectedOutput()
    {
        return 'hello: world';
    }

    protected function getWriter()
    {
        return new XmlWriter();
    }
}
