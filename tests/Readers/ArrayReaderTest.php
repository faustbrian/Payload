<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Readers;

use BrianFaust\Payload\Readers\ArrayReader;

class ArrayReaderTest extends AbstractTestCase
{
    protected function getFileExtension(): string
    {
        return 'php';
    }

    protected function getReader(): ArrayReader
    {
        return new ArrayReader();
    }
}
