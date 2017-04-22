<?php



declare(strict_types=1);



namespace BrianFaust\Payload\Serialisers;

use BrianFaust\Payload\Contracts\Serialiser;
use Symfony\Component\Yaml\Dumper;

class YamlSerialiser implements Serialiser
{
    public function serialise($input): string
    {
        return (new Dumper())->dump($input);
    }
}
