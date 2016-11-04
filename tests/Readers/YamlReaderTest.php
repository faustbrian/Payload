<?php

namespace BrianFaust\Tests\Payload\Readers;

use BrianFaust\Payload\Readers\YamlReader;

class YamlReaderTest extends AbstractTestCase
{
    protected function getFileExtension()
    {
        return 'yml';
    }

    protected function getReader()
    {
        return new YamlReader();
    }
}
