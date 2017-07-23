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

use BrianFaust\Payload\Utils\Mapper;
use BrianFaust\Payload\Contracts\Unserialiser;

class XmlUnserialiser implements Unserialiser
{
    public function unserialise($input, ?string $class = null): array
    {
        $contents = json_decode(json_encode(simplexml_load_string($input, null, LIBXML_NOCDATA)));

        if (! is_null($class)) {
            return (new Mapper())->map($contents, $class);
        }

        return (array) $contents;
    }
}
