<?php

namespace BrianFaust\Tests\Payload\Readers;

use BrianFaust\Payload\Readers\XmlReader;

class XmlReaderTest extends AbstractTestCase
{
    protected function getFileExtension()
    {
        return 'xml';
    }

    protected function getReader()
    {
        return new XmlReader();
    }
}
