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

namespace BrianFaust\Tests\Payload\Writers;

use BrianFaust\Payload\Writers\YamlWriter;

class YamlWriterTest extends AbstractTestCase
{
    protected function getExpectedOutput(): string
    {
        return 'hello: world';
    }

    protected function getWriter(): YamlWriter
    {
        return new YamlWriter();
    }
}
