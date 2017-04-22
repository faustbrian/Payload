<?php



declare(strict_types=1);



namespace BrianFaust\Payload\Writers;

use BrianFaust\Payload\Serialisers\YamlSerialiser;

class YamlWriter extends Writer
{
    public function write($path, $input): bool
    {
        return $this->put($path, (new YamlSerialiser())->serialise($input));
    }
}
