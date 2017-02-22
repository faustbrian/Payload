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

namespace BrianFaust\Tests\Payload\Utils;

use BrianFaust\Payload\Exceptions\FileDoesNotExistException;
use BrianFaust\Payload\Utils\File;

class FileTest extends AbstractTestCase
{
    public function should_get_extension_from_path(): void
    {
        $this->assertEquals('json', File::extension('data.json'));
    }

    public function should_return_true_when_file_exists(): void
    {
        $this->assertTrue(File::exists(sprintf('%s/../stubs/data.json', __DIR__)));
    }

    public function should_return_false_when_files_does_not_exist(): void
    {
        $this->assertFalse(File::exists('invalid.json'));
    }

    public function should_throw_exception_when_getting_contents_of_file_that_does_not_exist(): void
    {
        $this->setExpectedException(FileDoesNotExistException::class);

        File::contents('invalid.json');
    }

    public function should_get_the_contents_of_a_file(): void
    {
        $contents = File::contents(sprintf('%s/../stubs/data.json', __DIR__));

        $this->assertEquals(json_encode(['hello' => 'world']), $contents);
    }

    public function should_throw_exception_when_getting_file_that_does_not_exist(): void
    {
        $this->setExpectedException(FileDoesNotExistException::class);

        File::get('invalid.json');
    }

    public function should_get_a_file(): void
    {
        $contents = File::get(sprintf('%s/../stubs/data.php', __DIR__));

        $this->assertEquals(['hello' => 'world'], $contents);
    }
}
