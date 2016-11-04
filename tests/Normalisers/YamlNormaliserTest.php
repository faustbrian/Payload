<?php

namespace BrianFaust\Tests\Payload\Normalisers;

use BrianFaust\Payload\Normalisers\YamlNormaliser;

class YamlNormaliserTest extends AbstractTestCase
{
    protected function getNormaliser()
    {
        return new YamlNormaliser();
    }
}
