<?php


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

use BrianFaust\Payload\Contracts\Serialiser;

abstract class AbstractTestCase extends \PHPUnit_Framework_TestCase
{
    public function should_return_serialiser(): void
    {
        $serialiser = $this->getSerialiser();

        $this->assertInstanceOf(Serialiser::class, $serialiser);
    }

    public function should_serialise_input(): void
    {
        $serialiser = $this->getSerialiser();

        $contents = $serialiser->serialise(['hello' => 'world']);

        $this->assertEquals($this->getExpectedOutput(), $contents);
    }

    abstract protected function getSerialiser();

    abstract protected function getExpectedOutput();
}
