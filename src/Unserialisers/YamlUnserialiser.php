<?php

namespace BrianFaust\Payload\Unserialisers;

use BrianFaust\Payload\Contracts\Unserialiser;
use BrianFaust\Payload\Utils\Mapper;
use Symfony\Component\Yaml\Yaml;

class YamlUnserialiser implements Unserialiser
{
    public function unserialise($input, $class = null)
    {
        $contents = Yaml::parse($input);

        if (!is_null($class)) {
            return (new Mapper())->map($contents, $class);
        }

        return $contents;
    }
}
