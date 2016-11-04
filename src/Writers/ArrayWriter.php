<?php

namespace BrianFaust\Payload\Writers;

use BrianFaust\Payload\Serialisers\ArraySerialiser;

class ArrayWriter extends Writer
{
    public function write($path, $input)
    {
        $contents = (new ArraySerialiser())->serialise($input);

        return $this->put($path, "<?php

 return $contents;");
    }
}
