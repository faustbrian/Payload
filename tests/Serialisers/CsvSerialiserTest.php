<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Serialisers;

use BrianFaust\Payload\Serialisers\CsvSerialiser;

class CsvSerialiserTest extends AbstractTestCase
{
    protected function getExpectedOutput(): string
    {
        return 'hello
world
';
    }

    protected function getSerialiser(): CsvSerialiser
    {
        return new CsvSerialiser();
    }
}
