<?php

namespace BrianFaust\Tests\Payload\Writers;

use BrianFaust\Payload\Writers\CsvWriter;

class CsvWriterTest extends AbstractTestCase
{
    protected function getExpectedOutput()
    {
        return 'hello: world';
    }

    protected function getWriter()
    {
        return new CsvWriter();
    }
}
