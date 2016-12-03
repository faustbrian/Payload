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
use BrianFaust\Payload\Readers\YamlReader;
use BrianFaust\Payload\Serialisers\YamlInlineSerialiser;
use BrianFaust\Payload\Unserialisers\YamlUnserialiser;
use BrianFaust\Payload\Writers\YamlInlineWriter;

class YamlInlineNormaliser implements Normaliser
{
    protected $serialiser;

    protected $unserialiser;

    protected $writer;

    protected $reader;

    public function serialiser(): YamlSerialiser
    {
        if ($this->serialiser) {
            return $this->serialiser;
        }

        return $this->serialiser = new YamlInlineSerialiser();
    }

    public function unserialiser(): YamlUnserialiser
    {
        if ($this->unserialiser) {
            return $this->unserialiser;
        }

        return $this->unserialiser = new YamlUnserialiser();
    }

    public function writer(): YamlWriter
    {
        if ($this->writer) {
            return $this->writer;
        }

        return $this->writer = new YamlInlineWriter();
    }

    public function reader(): YamlReader
    {
        if ($this->reader) {
            return $this->reader;
        }

        return $this->reader = new YamlReader();
    }
}
