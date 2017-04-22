<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Unserialisers;

use BrianFaust\Payload\Unserialisers\JsonUnserialiser;

class JsonUnserialiserTest extends AbstractTestCase
{
    protected function getInput(): string
    {
        return '{"hello":"world"}';
    }

    protected function getUnserialiser(): JsonUnserialiser
    {
        return new JsonUnserialiser();
    }
}
