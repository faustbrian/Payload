<?php



declare(strict_types=1);



namespace BrianFaust\Payload\Unserialisers;

use BrianFaust\Payload\Contracts\Unserialiser;
use BrianFaust\Payload\Utils\Mapper;

class ValueUnserialiser implements Unserialiser
{
    public function unserialise($input, ? string $class) : array
    {
        $contents = unserialize($input);

        if (!is_null($class)) {
            return (new Mapper())->map($contents, $class);
        }

        return $contents;
    }
}
