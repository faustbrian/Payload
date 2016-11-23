<?php

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Payload\Unserialisers;

use BrianFaust\Payload\Contracts\Unserialiser;
use BrianFaust\Payload\Utils\Mapper;

class ArrayUnserialiser implements Unserialiser
{
    public function unserialise($input, $class = null)
    {
        if (! is_array($input)) {
            $input = eval("return $input;");
        }

        if (! is_null($class)) {
            return (new Mapper())->map($input, $class);
        }

        return $input;
    }
}
