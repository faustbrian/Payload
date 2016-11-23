<?php

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\Payload\Utils;

use BrianFaust\Payload\Utils\File;
use BrianFaust\Payload\Exceptions\FileDoesNotExistException;

class FileTest extends AbstractTestCase
{
    public function should_get_extension_from_path()
    {
        $this->assertEquals('json', File::extension('data.json'));
    }

    public function should_return_true_when_file_exists()
    {
        $this->assertTrue(File::exists(sprintf('%s/../stubs/data.json', __DIR__)));
    }

    public function should_return_false_when_files_does_not_exist()
    {
        $this->assertFalse(File::exists('invalid.json'));
    }

    public function should_throw_exception_when_getting_contents_of_file_that_does_not_exist()
    {
        $this->setExpectedException(FileDoesNotExistException::class);

        File::contents('invalid.json');
    }

    public function should_get_the_contents_of_a_file()
    {
        $contents = File::contents(sprintf('%s/../stubs/data.json', __DIR__));

        $this->assertEquals(json_encode(['hello' => 'world']), $contents);
    }

    public function should_throw_exception_when_getting_file_that_does_not_exist()
    {
        $this->setExpectedException(FileDoesNotExistException::class);

        File::get('invalid.json');
    }

    public function should_get_a_file()
    {
        $contents = File::get(sprintf('%s/../stubs/data.php', __DIR__));

        $this->assertEquals(['hello' => 'world'], $contents);
    }
}
