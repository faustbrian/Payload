<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Normalisers;

use BrianFaust\Payload\Normalisers\CsvNormaliser;

class CsvNormaliserTest extends AbstractTestCase
{
    protected function getNormaliser(): CsvNormaliser
    {
        return new CsvNormaliser();
    }
}
