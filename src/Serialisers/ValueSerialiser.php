<?php



declare(strict_types=1);



namespace BrianFaust\Payload\Serialisers;

use BrianFaust\Payload\Contracts\Serialiser;

class ValueSerialiser implements Serialiser
{
    public function serialise($input): string
    {
        return serialize($input);
    }
}
