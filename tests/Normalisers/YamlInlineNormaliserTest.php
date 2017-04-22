<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Normalisers;

use BrianFaust\Payload\Normalisers\YamlInlineNormaliser;

class YamlInlineNormaliserTest extends AbstractTestCase
{
    protected function getNormaliser(): YamlNormaliser
    {
        return new YamlInlineNormaliser();
    }
}
