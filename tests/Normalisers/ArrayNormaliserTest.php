<?php

namespace BrianFaust\Tests\Payload\Normalisers;

use BrianFaust\Payload\Normalisers\ArrayNormaliser;

class ArrayNormaliserTest extends AbstractTestCase
{
    protected function getNormaliser()
    {
        return new ArrayNormaliser();
    }
}
