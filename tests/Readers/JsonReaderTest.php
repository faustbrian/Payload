<?php

namespace BrianFaust\Tests\Payload\Readers;

use BrianFaust\Payload\Readers\JsonReader;

class JsonReaderTest extends AbstractTestCase
{
    protected function getFileExtension()
    {
        return 'json';
    }

    protected function getReader()
    {
        return new JsonReader();
    }
}
