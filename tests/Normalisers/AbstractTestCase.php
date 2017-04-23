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

namespace BrianFaust\Tests\Payload\Normalisers;

use BrianFaust\Payload\Contracts\Serialiser;
use BrianFaust\Payload\Contracts\Unserialiser;
use BrianFaust\Payload\Readers\Reader;
use BrianFaust\Payload\Writers\Writer;

abstract class AbstractTestCase extends \PHPUnit_Framework_TestCase
{
    public function should_return_serialiser(): void
    {
        $normaliser = $this->getNormaliser();

        $this->assertInstanceOf(Serialiser::class, $normaliser->serialiser());
    }

    public function should_return_unserialiser(): void
    {
        $normaliser = $this->getNormaliser();

        $this->assertInstanceOf(Unserialiser::class, $normaliser->unserialiser());
    }

    public function should_return_reader(): void
    {
        $normaliser = $this->getNormaliser();

        $this->assertInstanceOf(Reader::class, $normaliser->reader());
    }

    public function should_return_writer(): void
    {
        $normaliser = $this->getNormaliser();

        $this->assertInstanceOf(Writer::class, $normaliser->writer());
    }

    abstract protected function getNormaliser();
}
