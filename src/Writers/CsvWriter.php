<?php

namespace BrianFaust\Payload\Writers;

use BrianFaust\Payload\Serialisers\CsvSerialiser;

class CsvWriter extends Writer
{
    public function write($path, $input)
    {
        return $this->put($path, (new CsvSerialiser())->serialise($input));
    }
}
