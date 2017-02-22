<?php

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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

use BrianFaust\Payload\Serialisers\ValueSerialiser;

class ValueSerialiserTest extends AbstractTestCase
{
    protected function getExpectedOutput(): string
    {
        return 'a:1:{s:5:"hello";s:5:"world";}';
    }

    protected function getSerialiser(): ValueSerialiser
    {
        return new ValueSerialiser();
    }
}
