<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Writers;

use BrianFaust\Payload\Writers\JsonWriter;

class JsonWriterTest extends AbstractTestCase
{
    protected function getExpectedOutput(): string
    {
        return 'hello: world';
    }

    protected function getWriter(): JsonWriter
    {
        return new JsonWriter();
    }
}
