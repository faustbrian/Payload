<?php

declare(strict_types=1);

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Payload\Readers;

use BrianFaust\Payload\Unserialisers\YamlUnserialiser;

class YamlReader extends Reader
{
    protected $extensions = ['yaml', 'yml'];

    public function read($path, ?string $class = null): array
    {
        return (new YamlUnserialiser())->unserialise($this->contents($path), $class);
    }
}
