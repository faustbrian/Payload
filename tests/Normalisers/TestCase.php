<?php

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\Payload\Normalisers;

use BrianFaust\Payload\Readers\Reader;
use BrianFaust\Payload\Writers\Writer;
use BrianFaust\Payload\Contracts\Serialiser;
use BrianFaust\Payload\Contracts\Unserialiser;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /** @test */
    public function should_return_serialiser()
    {
        $normaliser = $this->getNormaliser();

        $this->assertInstanceOf(Serialiser::class, $normaliser->serialiser());
    }

    /** @test */
    public function should_return_unserialiser()
    {
        $normaliser = $this->getNormaliser();

        $this->assertInstanceOf(Unserialiser::class, $normaliser->unserialiser());
    }

    /** @test */
    public function should_return_reader()
    {
        $normaliser = $this->getNormaliser();

        $this->assertInstanceOf(Reader::class, $normaliser->reader());
    }

    /** @test */
    public function should_return_writer()
    {
        $normaliser = $this->getNormaliser();

        $this->assertInstanceOf(Writer::class, $normaliser->writer());
    }

    abstract protected function getNormaliser();
}
