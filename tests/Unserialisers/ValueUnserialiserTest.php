<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Unserialisers;

use BrianFaust\Payload\Unserialisers\ValueUnserialiser;

class ValueUnserialiserTest extends AbstractTestCase
{
    protected function getInput(): string
    {
        return 'a:1:{s:5:"hello";s:5:"world";}';
    }

    protected function getUnserialiser(): ValueUnserialiser
    {
        return new ValueUnserialiser();
    }
}
