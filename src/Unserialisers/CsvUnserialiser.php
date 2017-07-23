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

use BrianFaust\Csv\Reader;
use BrianFaust\Payload\Utils\Mapper;
use BrianFaust\Payload\Contracts\Unserialiser;

class CsvUnserialiser implements Unserialiser
{
    public function unserialise($input, ?string $class = null): array
    {
        $reader = Reader::createFromString($input);

        $contents = $reader->fetchAll();

        // @deprecated for the moment
        // for ($i = 0; $i < count($contents); ++$i) {
        //     if ($i <= 0) {
        //         continue;
        //     }

        //     $contents[$i] = array_combine($contents[0], $contents[$i]);
        // }

        if (! is_null($class)) {
            return (new Mapper())->map($contents, $class);
        }

        return $contents;
    }
}
