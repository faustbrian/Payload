<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Serialisers;

use BrianFaust\Payload\Serialisers\ArraySerialiser;

class ArraySerialiserTest extends AbstractTestCase
{
    protected function getExpectedOutput(): string
    {
        return "array (
  'hello' => 'world',
)";
    }

    protected function getSerialiser(): ArraySerialiser
    {
        return new ArraySerialiser();
    }
}
