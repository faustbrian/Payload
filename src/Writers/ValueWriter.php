<?php

namespace BrianFaust\Payload\Writers;

use BrianFaust\Payload\Serialisers\ValueSerialiser;

class ValueWriter extends Writer
{
    public function write($path, $input)
    {
        return $this->put($path, (new ValueSerialiser())->serialise($input));
    }
}
