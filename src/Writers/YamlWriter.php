<?php

namespace BrianFaust\Payload\Writers;

use BrianFaust\Payload\Serialisers\YamlSerialiser;

class YamlWriter extends Writer
{
    public function write($path, $input)
    {
        return $this->put($path, (new YamlSerialiser())->serialise($input));
    }
}
