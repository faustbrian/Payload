<?php


declare(strict_types=1);

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\Payload\Readers;

use BrianFaust\Payload\Readers\ArrayReader;

class ArrayReaderTest extends AbstractTestCase
{
    protected function getFileExtension(): string
    {
        return 'php';
    }

    protected function getReader(): ArrayReader
    {
        return new ArrayReader();
    }
}
