<?php

namespace BrianFaust\Payload\Serialisers;

use BrianFaust\Payload\Contracts\Serialiser;

class ValueSerialiser implements Serialiser
{
    public function serialise($input)
    {
        return serialize($input);
    }
}
