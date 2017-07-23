<?php

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Payload\Normalisers;

use BrianFaust\Payload\Readers\Reader;
use BrianFaust\Payload\Writers\Writer;
use BrianFaust\Payload\Readers\ArrayReader;
use BrianFaust\Payload\Writers\ArrayWriter;
use BrianFaust\Payload\Contracts\Normaliser;
use BrianFaust\Payload\Contracts\Serialiser;
use BrianFaust\Payload\Contracts\Unserialiser;
use BrianFaust\Payload\Serialisers\ArraySerialiser;
use BrianFaust\Payload\Unserialisers\ArrayUnserialiser;

class ArrayNormaliser implements Normaliser
{
    protected $serialiser;

    protected $unserialiser;

    protected $writer;

    protected $reader;

    public function serialiser(): Serialiser
    {
        if ($this->serialiser) {
            return $this->serialiser;
        }

        return $this->serialiser = new ArraySerialiser();
    }

    public function unserialiser(): Unserialiser
    {
        if ($this->unserialiser) {
            return $this->unserialiser;
        }

        return $this->unserialiser = new ArrayUnserialiser();
    }

    public function writer(): Writer
    {
        if ($this->writer) {
            return $this->writer;
        }

        return $this->writer = new ArrayWriter();
    }

    public function reader(): Reader
    {
        if ($this->reader) {
            return $this->reader;
        }

        return $this->reader = new ArrayReader();
    }
}
