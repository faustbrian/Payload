<?php



declare(strict_types=1);



namespace BrianFaust\Payload\Unserialisers;

use BrianFaust\Payload\Contracts\Unserialiser;
use BrianFaust\Payload\Utils\Mapper;

class ArrayUnserialiser implements Unserialiser
{
    public function unserialise($input, ? string $class) : array
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
