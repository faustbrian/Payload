<?php

namespace BrianFaust\Payload\Writers;

use BrianFaust\Payload\Utils\File;

abstract class Writer
{
    abstract public function write($path, $input);

    public function put($path, $contents)
    {
        return File::put($path, $contents);
    }
}
