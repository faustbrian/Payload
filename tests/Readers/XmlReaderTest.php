<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Readers;

use BrianFaust\Payload\Readers\XmlReader;

class XmlReaderTest extends AbstractTestCase
{
    protected function getFileExtension(): string
    {
        return 'xml';
    }

    protected function getReader(): XmlReader
    {
        return new XmlReader();
    }
}
