<?php

namespace BrianFaust\Payload\Unserialisers;

use BrianFaust\Payload\Contracts\Unserialiser;
use BrianFaust\Payload\Utils\Mapper;

class ArrayUnserialiser implements Unserialiser
{
    public function unserialise($input, $class = null)
    {
        if (!is_array($input)) {
            $input = eval("return $input;");
        }

        if (!is_null($class)) {
            return (new Mapper())->map($input, $class);
        }

        return $input;
    }
}
