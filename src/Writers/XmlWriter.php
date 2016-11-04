<?php

namespace BrianFaust\Payload\Writers;

use BrianFaust\Payload\Serialisers\XmlSerialiser;

class XmlWriter extends Writer
{
    public function write($path, $input)
    {
        return $this->put($path, (new XmlSerialiser())->serialise($input));
    }
}
