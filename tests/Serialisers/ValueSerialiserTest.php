<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Serialisers;

use BrianFaust\Payload\Serialisers\ValueSerialiser;

class ValueSerialiserTest extends AbstractTestCase
{
    protected function getExpectedOutput(): string
    {
        return 'a:1:{s:5:"hello";s:5:"world";}';
    }

    protected function getSerialiser(): ValueSerialiser
    {
        return new ValueSerialiser();
    }
}
