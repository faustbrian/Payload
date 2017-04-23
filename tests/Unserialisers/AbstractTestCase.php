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

namespace BrianFaust\Tests\Payload\Unserialisers;

use BrianFaust\Payload\Contracts\Unserialiser;

abstract class AbstractTestCase extends \PHPUnit_Framework_TestCase
{
    public function should_return_unserialiser(): void
    {
        $unserialiser = $this->getUnserialiser();

        $this->assertInstanceOf(Unserialiser::class, $unserialiser);
    }

    public function should_unserialise_input(): void
    {
        $unserialiser = $this->getUnserialiser();

        $contents = $unserialiser->unserialise($this->getInput());

        $this->assertEquals(['hello' => 'world'], $contents);
    }

    abstract protected function getUnserialiser();

    abstract protected function getInput();
}
