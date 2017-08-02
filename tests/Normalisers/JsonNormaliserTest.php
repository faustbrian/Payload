<?php

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\Payload\Normalisers;

use BrianFaust\Payload\Normalisers\JsonNormaliser;

class JsonNormaliserTest extends TestCase
{
    protected function getNormaliser(): JsonNormaliser
    {
        return new JsonNormaliser();
    }
}
