<?php



declare(strict_types=1);



namespace BrianFaust\Tests\Payload\Normalisers;

use BrianFaust\Payload\Normalisers\XmlNormaliser;

class XmlNormaliserTest extends AbstractTestCase
{
    protected function getNormaliser(): XmlNormaliser
    {
        return new XmlNormaliser();
    }
}
