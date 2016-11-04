<?php

namespace BrianFaust\Tests\Payload\Normalisers;

use BrianFaust\Payload\Normalisers\ValueNormaliser;

class ValueNormaliserTest extends AbstractTestCase
{
    protected function getNormaliser()
    {
        return new ValueNormaliser();
    }
}
