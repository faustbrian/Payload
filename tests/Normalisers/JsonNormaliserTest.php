<?php

namespace BrianFaust\Tests\Payload\Normalisers;

use BrianFaust\Payload\Normalisers\JsonNormaliser;

class JsonNormaliserTest extends AbstractTestCase
{
    protected function getNormaliser()
    {
        return new JsonNormaliser();
    }
}
