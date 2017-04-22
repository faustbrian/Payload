<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Writers;

use BrianFaust\Payload\Writers\XmlWriter;

class XmlWriterTest extends AbstractTestCase
{
    protected function getExpectedOutput(): string
    {
        return 'hello: world';
    }

    protected function getWriter(): XmlWriter
    {
        return new XmlWriter();
    }
}
