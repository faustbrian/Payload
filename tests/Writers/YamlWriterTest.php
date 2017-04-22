<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Writers;

use BrianFaust\Payload\Writers\YamlWriter;

class YamlWriterTest extends AbstractTestCase
{
    protected function getExpectedOutput(): string
    {
        return 'hello: world';
    }

    protected function getWriter(): YamlWriter
    {
        return new YamlWriter();
    }
}
