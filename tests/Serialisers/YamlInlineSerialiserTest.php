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

use BrianFaust\Payload\Serialisers\YamlInlineSerialiser;

class YamlInlineSerialiserTest extends AbstractTestCase
{
    protected function getExpectedOutput(): string
    {
        return "hello: world\n";
    }

    protected function getSerialiser(): YamlInlineSerialiser
    {
        return new YamlInlineSerialiser();
    }
}
