<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Unserialisers;

use BrianFaust\Payload\Unserialisers\XmlUnserialiser;

class XmlUnserialiserTest extends AbstractTestCase
{
    protected function getInput(): string
    {
        return '<?xml version="1.0"?><response><hello>world</hello></response>';
    }

    protected function getUnserialiser(): XmlUnserialiser
    {
        return new XmlUnserialiser();
    }
}
