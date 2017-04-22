<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Serialisers;

use BrianFaust\Payload\Serialisers\YamlSerialiser;

class YamlSerialiserTest extends AbstractTestCase
{
    protected function getExpectedOutput(): string
    {
        return '{ hello: world }';
    }

    protected function getSerialiser(): YamlSerialiser
    {
        return new YamlSerialiser();
    }
}
