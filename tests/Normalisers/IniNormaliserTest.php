<?php

namespace BrianFaust\Tests\Payload\Normalisers;

use BrianFaust\Payload\Normalisers\IniNormaliser;

class IniNormaliserTest extends AbstractTestCase
{
    protected function getNormaliser()
    {
        return new IniNormaliser();
    }
}
