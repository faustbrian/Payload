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

namespace BrianFaust\Payload\Readers;

use BrianFaust\Payload\Exceptions\InvalidFileTypeException;
use BrianFaust\Payload\Utils\File;

abstract class Reader
{
    protected $extensions = [];

    abstract public function read($path, $class): array;

    public function check($path): bool
    {
        $extension = File::extension($path);

        if (!in_array($extension, $this->extensions)) {
            throw new InvalidFileTypeException(
                sprintf('%s is an invalid file type for the %s class', $extension, get_class($this)));
        }

        return true;
    }

    public function contents($path): ? string
    {
        if ($this->check($path)) {
            return File::contents($path);
        }
    }

    public function get($path) : ? string
    {
        if ($this->check($path)) {
            return File::get($path);
        }
    }
}
