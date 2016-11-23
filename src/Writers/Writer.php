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

use BrianFaust\Payload\Utils\File;

abstract class Writer
{
    abstract public function write($path, $input);

    public function put($path, $contents)
    {
        return File::put($path, $contents);
    }
}
