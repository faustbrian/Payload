<?php

declare(strict_types=1);

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\Payload\Writers;

use BrianFaust\Payload\Writers\Writer;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /** @test */
    public function should_return_writer()
    {
        $writer = $this->getWriter();

        $this->assertInstanceOf(Writer::class, $writer);
    }

    /** @test */
    public function should_write_file()
    {
        $writer = $this->getWriter();

        $tempFile = tempnam(sys_get_temp_dir(), 'prefix');

        $result = $writer->write($tempFile, ['hello' => 'world']);

        $this->assertTrue($result);
    }

    abstract protected function getWriter();
}
