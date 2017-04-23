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

namespace BrianFaust\Payload\Utils;

use BrianFaust\Payload\Exceptions\FileDoesNotExistException;

class File
{
    public static function extension($path): string
    {
        return pathinfo($path, PATHINFO_EXTENSION);
    }

    public static function exists($path): bool
    {
        return file_exists($path);
    }

    public static function contents($path): string
    {
        if (self::exists($path)) {
            return trim(file_get_contents($path));
        }

        throw new FileDoesNotExistException(sprintf('%s is not a valid file', $path));
    }

    public static function get($path): string
    {
        if (self::exists($path)) {
            return require $path;
        }

        throw new FileDoesNotExistException(sprintf('%s is not a valid file', $path));
    }

    public static function put($path, $contents): bool
    {
        return (bool) file_put_contents($path, $contents);
    }
}
