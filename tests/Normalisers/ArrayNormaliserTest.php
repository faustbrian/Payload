<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Normalisers;

use BrianFaust\Payload\Normalisers\ArrayNormaliser;

class ArrayNormaliserTest extends AbstractTestCase
{
    protected function getNormaliser(): ArrayNormaliser
    {
        return new ArrayNormaliser();
    }
}
