<?php

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Payload\Writers;

use BrianFaust\Payload\Serialisers\IniSerialiser;

class IniWriter extends Writer
{
    public function write($path, $input)
    {
        return $this->put($path, (new IniSerialiser())->serialise($input));
    }
}
