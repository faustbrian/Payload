<?php

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\Payload\Unserialisers;

use BrianFaust\Payload\Unserialisers\JsonUnserialiser;

class JsonUnserialiserTest extends AbstractTestCase
{
    protected function getInput()
    {
        return '{"hello":"world"}';
    }

    protected function getUnserialiser()
    {
        return new JsonUnserialiser();
    }
}
