<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Serialisers;

use BrianFaust\Payload\Serialisers\YamlInlineSerialiser;

class YamlInlineSerialiserTest extends AbstractTestCase
{
    protected function getExpectedOutput(): string
    {
        return "hello: world\n";
    }

    protected function getSerialiser(): YamlInlineSerialiser
    {
        return new YamlInlineSerialiser();
    }
}
