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
use BrianFaust\Payload\Readers\YamlReader;
use BrianFaust\Payload\Contracts\Normaliser;
use BrianFaust\Payload\Contracts\Serialiser;
use BrianFaust\Payload\Contracts\Unserialiser;
use BrianFaust\Payload\Writers\YamlInlineWriter;
use BrianFaust\Payload\Unserialisers\YamlUnserialiser;
use BrianFaust\Payload\Serialisers\YamlInlineSerialiser;

class YamlInlineNormaliser implements Normaliser
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

        return $this->serialiser = new YamlInlineSerialiser();
    }

    public function unserialiser(): Unserialiser
    {
        if ($this->unserialiser) {
            return $this->unserialiser;
        }

        return $this->unserialiser = new YamlUnserialiser();
    }

    public function writer(): Writer
    {
        if ($this->writer) {
            return $this->writer;
        }

        return $this->writer = new YamlInlineWriter();
    }

    public function reader(): Reader
    {
        if ($this->reader) {
            return $this->reader;
        }

        return $this->reader = new YamlReader();
    }
}
