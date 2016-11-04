<?php

namespace BrianFaust\Tests\Payload\Writers;

use BrianFaust\Payload\Writers\Writer;
use PHPUnit_Framework_TestCase as TestCase;

abstract class AbstractTestCase extends TestCase
{
    public function should_return_writer()
    {
        $writer = $this->getWriter();

        $this->assertInstanceOf(Writer::class, $writer);
    }

    public function should_write_file()
    {
        $writer = $this->getWriter();

        $tempFile = tempnam(sys_get_temp_dir(), 'prefix');

        $result = $writer->write($tempFile, ['hello' => 'world']);

        $this->assertTrue($result);
    }

    abstract protected function getWriter();
}
