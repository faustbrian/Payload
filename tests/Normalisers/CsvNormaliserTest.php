<?php

namespace BrianFaust\Tests\Payload\Normalisers;

use BrianFaust\Payload\Normalisers\CsvNormaliser;

class CsvNormaliserTest extends AbstractTestCase
{
    protected function getNormaliser()
    {
        return new CsvNormaliser();
    }
}
