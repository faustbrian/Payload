<?php

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\Payload\Serialisers;

use BrianFaust\Payload\Serialisers\XmlSerialiser;

class XmlSerialiserTest extends AbstractTestCase
{
    public function should_serialise_input(): void
    {
        $serialiser = $this->getSerialiser();

        $contents = $serialiser->serialise(['hello' => 'world']);

        $this->assertXmlStringEqualsXmlString($this->getExpectedOutput(), $contents);
    }

    protected function getExpectedOutput(): string
    {
        return '<?xml version="1.0"?><response><hello>world</hello></response>';
    }

    protected function getSerialiser(): XmlSerialiser
    {
        return new XmlSerialiser();
    }
}
