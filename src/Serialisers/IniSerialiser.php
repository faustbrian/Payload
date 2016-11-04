<?php

namespace BrianFaust\Payload\Serialisers;

use BrianFaust\Payload\Contracts\Serialiser;
use BrianFaust\Payload\Utils\IniBuilder;

class IniSerialiser implements Serialiser
{
    public function serialise($input)
    {
        return (new IniBuilder())->build($input);
    }
}
