<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Readers;

use BrianFaust\Payload\Readers\IniReader;

class IniReaderTest extends AbstractTestCase
{
    protected function getFileExtension(): string
    {
        return 'ini';
    }

    protected function getReader(): IniReader
    {
        return new IniReader();
    }
}
