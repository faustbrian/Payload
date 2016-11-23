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

use BrianFaust\Payload\Contracts\Serialiser;
use BrianFaust\Payload\Utils\IniBuilder;

class IniSerialiser implements Serialiser
{
    public function serialise($input)
    {
        return (new IniBuilder())->build($input);
    }
}
