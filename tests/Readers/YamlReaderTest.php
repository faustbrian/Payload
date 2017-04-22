<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Readers;

use BrianFaust\Payload\Readers\YamlReader;

class YamlReaderTest extends AbstractTestCase
{
    protected function getFileExtension(): string
    {
        return 'yml';
    }

    protected function getReader(): YamlReader
    {
        return new YamlReader();
    }
}
