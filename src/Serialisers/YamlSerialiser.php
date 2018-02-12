<?php

declare(strict_types=1);

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Payload\Serialisers;

use BrianFaust\Payload\Contracts\Serialiser;
use Symfony\Component\Yaml\Dumper;

class YamlSerialiser implements Serialiser
{
    public function serialise($input): string
    {
        return (new Dumper())->dump($input);
    }
}
