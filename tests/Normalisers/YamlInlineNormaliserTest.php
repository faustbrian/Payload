<?php

namespace BrianFaust\Tests\Payload\Normalisers;

use BrianFaust\Payload\Normalisers\YamlInlineNormaliser;

class YamlInlineNormaliserTest extends AbstractTestCase
{
    protected function getNormaliser()
    {
        return new YamlInlineNormaliser();
    }
}
