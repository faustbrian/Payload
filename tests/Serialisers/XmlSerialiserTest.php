<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Serialisers;

use BrianFaust\Payload\Serialisers\XmlSerialiser;

class XmlSerialiserTest extends AbstractTestCase
{
    public function should_serialise_input(): void
    {
        $serialiser = $this->getSerialiser();

        $contents = $serialiser->serialise(['hello' => 'world']);

        $this->assertXmlStringEqualsXmlString($this->getExpectedOutput(), $contents);
    }

    protected function getExpectedOutput(): string
    {
        return '<?xml version="1.0"?><response><hello>world</hello></response>';
    }

    protected function getSerialiser(): XmlSerialiser
    {
        return new XmlSerialiser();
    }
}
