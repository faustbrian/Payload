<?php

namespace BrianFaust\Tests\Payload\Normalisers;

use BrianFaust\Payload\Normalisers\XmlNormaliser;

class XmlNormaliserTest extends AbstractTestCase
{
    protected function getNormaliser()
    {
        return new XmlNormaliser();
    }
}
