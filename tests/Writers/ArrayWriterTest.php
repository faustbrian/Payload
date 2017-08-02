<?php

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\Payload\Writers;

use BrianFaust\Payload\Writers\ArrayWriter;

class ArrayWriterTest extends TestCase
{
    protected function getExpectedOutput(): string
    {
        return 'hello: world';
    }

    protected function getWriter(): ArrayWriter
    {
        return new ArrayWriter();
    }
}
