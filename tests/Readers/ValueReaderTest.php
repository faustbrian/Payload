<?php

namespace BrianFaust\Tests\Payload\Readers;

use BrianFaust\Payload\Readers\ValueReader;

class ValueReaderTest extends AbstractTestCase
{
    protected function getFileExtension()
    {
        return 'ser';
    }

    protected function getReader()
    {
        return new ValueReader();
    }
}
