<?php



declare(strict_types=1);



namespace BrianFaust\Payload\Writers;

use BrianFaust\Payload\Utils\File;

abstract class Writer
{
    abstract public function write($path, $input): bool;

    public function put($path, $contents): bool
    {
        return (bool) File::put($path, $contents);
    }
}
