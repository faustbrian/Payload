<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Unserialisers;

use BrianFaust\Payload\Unserialisers\CsvUnserialiser;

class CsvUnserialiserTest extends AbstractTestCase
{
    public function should_unserialise_input(): void
    {
        $unserialiser = $this->getUnserialiser();

        $contents = $unserialiser->unserialise($this->getInput());

        $this->assertEquals([['hello'], ['world']], $contents);
    }

    protected function getInput(): string
    {
        return 'hello
world
';
    }

    protected function getUnserialiser(): CsvUnserialiser
    {
        return new CsvUnserialiser();
    }
}
