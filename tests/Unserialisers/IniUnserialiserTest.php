<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Unserialisers;

use BrianFaust\Payload\Unserialisers\IniUnserialiser;

class IniUnserialiserTest extends AbstractTestCase
{
    protected function getInput(): string
    {
        return 'hello = world';
    }

    protected function getUnserialiser(): IniUnserialiser
    {
        return new IniUnserialiser();
    }
}
