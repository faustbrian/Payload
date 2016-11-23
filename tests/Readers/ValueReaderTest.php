<?php

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\Payload\Readers;

use BrianFaust\Payload\Readers\ValueReader;

class ValueReaderTest extends AbstractTestCase
{
    protected function getFileExtension()
    {
        return 'ser';
    }

    protected function getReader()
    {
        return new ValueReader();
    }
}
