<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Readers;

use BrianFaust\Payload\Readers\JsonReader;

class JsonReaderTest extends AbstractTestCase
{
    protected function getFileExtension(): string
    {
        return 'json';
    }

    protected function getReader(): JsonReader
    {
        return new JsonReader();
    }
}
