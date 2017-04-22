<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Readers;

use BrianFaust\Payload\Readers\CsvReader;

class CsvReaderTest extends AbstractTestCase
{
    public function should_read_file(): void
    {
        $reader = $this->getReader();

        $contents = $reader->read(
            sprintf('%s/../stubs/data.'.$this->getFileExtension(), __DIR__)
        );

        $this->assertEquals([['hello'], ['world']], $contents);
    }

    protected function getFileExtension(): string
    {
        return 'csv';
    }

    protected function getReader(): CsvReader
    {
        return new CsvReader();
    }
}
