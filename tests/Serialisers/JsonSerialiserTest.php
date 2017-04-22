<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Serialisers;

use BrianFaust\Payload\Serialisers\JsonSerialiser;

class JsonSerialiserTest extends AbstractTestCase
{
    protected function getExpectedOutput(): string
    {
        return '{"hello":"world"}';
    }

    protected function getSerialiser(): JsonSerialiser
    {
        return new JsonSerialiser();
    }
}
