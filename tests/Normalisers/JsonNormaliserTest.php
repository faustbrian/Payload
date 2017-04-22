<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Normalisers;

use BrianFaust\Payload\Normalisers\JsonNormaliser;

class JsonNormaliserTest extends AbstractTestCase
{
    protected function getNormaliser(): JsonNormaliser
    {
        return new JsonNormaliser();
    }
}
