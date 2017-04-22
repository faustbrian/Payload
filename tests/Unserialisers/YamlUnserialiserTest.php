<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Unserialisers;

use BrianFaust\Payload\Unserialisers\YamlUnserialiser;

class YamlUnserialiserTest extends AbstractTestCase
{
    protected function getInput(): string
    {
        return 'hello: world';
    }

    protected function getUnserialiser(): YamlUnserialiser
    {
        return new YamlUnserialiser();
    }
}
