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

use BrianFaust\Payload\Utils\IniBuilder;
use BrianFaust\Payload\Contracts\Serialiser;

class IniSerialiser implements Serialiser
{
    public function serialise($input): string
    {
        return (new IniBuilder())->build($input);
    }
}
