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

namespace BrianFaust\Payload\Normalisers;

use BrianFaust\Payload\Contracts\Normaliser;
use BrianFaust\Payload\Readers\ArrayReader;
use BrianFaust\Payload\Serialisers\ArraySerialiser;
use BrianFaust\Payload\Unserialisers\ArrayUnserialiser;
use BrianFaust\Payload\Writers\ArrayWriter;

class ArrayNormaliser implements Normaliser
{
    protected $serialiser;

    protected $unserialiser;

    protected $writer;

    protected $reader;

    public function serialiser(): ArraySerialiser
    {
        if ($this->serialiser) {
            return $this->serialiser;
        }

        return $this->serialiser = new ArraySerialiser();
    }

    public function unserialiser(): ArrayUnserialiser
    {
        if ($this->unserialiser) {
            return $this->unserialiser;
        }

        return $this->unserialiser = new ArrayUnserialiser();
    }

    public function writer(): ArrayWriter
    {
        if ($this->writer) {
            return $this->writer;
        }

        return $this->writer = new ArrayWriter();
    }

    public function reader(): ArrayReader
    {
        if ($this->reader) {
            return $this->reader;
        }

        return $this->reader = new ArrayReader();
    }
}
