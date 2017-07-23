<?php

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Payload\Serialisers;

use Symfony\Component\Yaml\Dumper;
use BrianFaust\Payload\Contracts\Serialiser;

class YamlSerialiser implements Serialiser
{
    public function serialise($input): string
    {
        return (new Dumper())->dump($input);
    }
}
