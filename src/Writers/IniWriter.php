<?php

namespace BrianFaust\Payload\Writers;

use BrianFaust\Payload\Serialisers\IniSerialiser;

class IniWriter extends Writer
{
    public function write($path, $input)
    {
        return $this->put($path, (new IniSerialiser())->serialise($input));
    }
}
