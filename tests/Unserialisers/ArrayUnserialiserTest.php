<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Unserialisers;

use BrianFaust\Payload\Unserialisers\ArrayUnserialiser;

class ArrayUnserialiserTest extends AbstractTestCase
{
    protected function getInput(): string
    {
        return "array ( 'hello' => 'world', )";
    }

    protected function getUnserialiser(): ArrayUnserialiser
    {
        return new ArrayUnserialiser();
    }
}
