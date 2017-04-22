<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Writers;

use BrianFaust\Payload\Writers\CsvWriter;

class CsvWriterTest extends AbstractTestCase
{
    protected function getExpectedOutput(): string
    {
        return 'hello: world';
    }

    protected function getWriter(): CsvWriter
    {
        return new CsvWriter();
    }
}
