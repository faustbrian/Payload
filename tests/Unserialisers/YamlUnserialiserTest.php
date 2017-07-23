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

use BrianFaust\Payload\Unserialisers\YamlUnserialiser;

class YamlUnserialiserTest extends TestCase
{
    protected function getInput(): string
    {
        return 'hello: world';
    }

    protected function getUnserialiser(): YamlUnserialiser
    {
        return new YamlUnserialiser();
    }
}
