<?php

namespace BrianFaust\Tests\Payload\Readers;

use BrianFaust\Payload\Readers\ArrayReader;

class ArrayReaderTest extends AbstractTestCase
{
    protected function getFileExtension()
    {
        return 'php';
    }

    protected function getReader()
    {
        return new ArrayReader();
    }
}
