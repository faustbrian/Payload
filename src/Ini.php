<?php

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Payload;

use BrianFaust\Payload\Normalisers\IniNormaliser;

class Ini
{
    protected $normaliser;

    public function __construct()
    {
        $this->normaliser = new IniNormaliser();
    }

    public function serialise($input)
    {
        return $this->normaliser->serialiser()->serialise($input);
    }

    public function unserialise($input, $class = null)
    {
        return $this->normaliser->unserialiser()->unserialise($input, $class);
    }

    public function write($path, $input)
    {
        return $this->normaliser->writer()->write($path, $input);
    }

    public function read($path, $class = null)
    {
        return $this->normaliser->reader()->read($path, $class);
    }
}
