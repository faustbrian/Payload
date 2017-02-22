<?php

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Payload\Readers;

use BrianFaust\Payload\Unserialisers\IniUnserialiser;

class IniReader extends Reader
{
    protected $extensions = ['ini'];

    public function read($path, ? string $class) : array
    {
        return (new IniUnserialiser())->unserialise($this->contents($path), $class);
    }
}
