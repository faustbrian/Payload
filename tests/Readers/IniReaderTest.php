<?php

namespace BrianFaust\Tests\Payload\Readers;

use BrianFaust\Payload\Readers\IniReader;

class IniReaderTest extends AbstractTestCase
{
    protected function getFileExtension()
    {
        return 'ini';
    }

    protected function getReader()
    {
        return new IniReader();
    }
}
