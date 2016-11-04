<?php

namespace BrianFaust\Payload\Serialisers;

use BrianFaust\Payload\Contracts\Serialiser;

class ArraySerialiser implements Serialiser
{
    public function serialise($input)
    {
        return var_export($input, true);
    }
}
