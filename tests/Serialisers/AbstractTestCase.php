<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Serialisers;

use BrianFaust\Payload\Contracts\Serialiser;

abstract class AbstractTestCase extends \PHPUnit_Framework_TestCase
{
    public function should_return_serialiser(): void
    {
        $serialiser = $this->getSerialiser();

        $this->assertInstanceOf(Serialiser::class, $serialiser);
    }

    public function should_serialise_input(): void
    {
        $serialiser = $this->getSerialiser();

        $contents = $serialiser->serialise(['hello' => 'world']);

        $this->assertEquals($this->getExpectedOutput(), $contents);
    }

    abstract protected function getSerialiser();

    abstract protected function getExpectedOutput();
}
