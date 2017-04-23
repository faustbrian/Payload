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

namespace BrianFaust\Tests\Payload\Serialisers;

use BrianFaust\Payload\Serialisers\ArraySerialiser;

class ArraySerialiserTest extends AbstractTestCase
{
    protected function getExpectedOutput(): string
    {
        return "array (
  'hello' => 'world',
)";
    }

    protected function getSerialiser(): ArraySerialiser
    {
        return new ArraySerialiser();
    }
}
