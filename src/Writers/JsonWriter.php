<?php

namespace BrianFaust\Payload\Writers;

use BrianFaust\Payload\Serialisers\JsonSerialiser;

class JsonWriter extends Writer
{
    public function write($path, $input)
    {
        return $this->put($path, (new JsonSerialiser())->serialise($input));
    }
}
