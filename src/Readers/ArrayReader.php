<?php

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Payload\Readers;

use BrianFaust\Payload\Unserialisers\ArrayUnserialiser;

class ArrayReader extends Reader
{
    protected $extensions = ['php'];

    public function read($path, $class = null)
    {
        return (new ArrayUnserialiser())->unserialise($this->get($path), $class);
    }
}
