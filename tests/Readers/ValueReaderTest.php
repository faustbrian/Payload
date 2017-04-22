<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Readers;

use BrianFaust\Payload\Readers\ValueReader;

class ValueReaderTest extends AbstractTestCase
{
    protected function getFileExtension(): string
    {
        return 'ser';
    }

    protected function getReader(): ValueReader
    {
        return new ValueReader();
    }
}
