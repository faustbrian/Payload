<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Normalisers;

use BrianFaust\Payload\Normalisers\ValueNormaliser;

class ValueNormaliserTest extends AbstractTestCase
{
    protected function getNormaliser(): ValueNormaliser
    {
        return new ValueNormaliser();
    }
}
