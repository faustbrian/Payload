<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Unserialisers;

use BrianFaust\Payload\Contracts\Unserialiser;

abstract class AbstractTestCase extends \PHPUnit_Framework_TestCase
{
    public function should_return_unserialiser(): void
    {
        $unserialiser = $this->getUnserialiser();

        $this->assertInstanceOf(Unserialiser::class, $unserialiser);
    }

    public function should_unserialise_input(): void
    {
        $unserialiser = $this->getUnserialiser();

        $contents = $unserialiser->unserialise($this->getInput());

        $this->assertEquals(['hello' => 'world'], $contents);
    }

    abstract protected function getUnserialiser();

    abstract protected function getInput();
}
