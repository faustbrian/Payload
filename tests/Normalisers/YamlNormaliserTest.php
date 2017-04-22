<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Normalisers;

use BrianFaust\Payload\Normalisers\YamlNormaliser;

class YamlNormaliserTest extends AbstractTestCase
{
    protected function getNormaliser(): YamlNormaliser
    {
        return new YamlNormaliser();
    }
}
