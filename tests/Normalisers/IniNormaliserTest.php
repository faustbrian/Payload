<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Normalisers;

use BrianFaust\Payload\Normalisers\IniNormaliser;

class IniNormaliserTest extends AbstractTestCase
{
    protected function getNormaliser(): IniNormaliser
    {
        return new IniNormaliser();
    }
}
