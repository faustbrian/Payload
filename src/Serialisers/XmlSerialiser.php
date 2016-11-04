<?php

namespace BrianFaust\Payload\Serialisers;

use BrianFaust\Payload\Contracts\Serialiser;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer as SymfonySerialiser;

class XmlSerialiser implements Serialiser
{
    public function serialise($input)
    {
        return (new SymfonySerialiser(
            [new ObjectNormalizer()], [new XmlEncoder()]
        ))->serialize($input, 'xml');
    }
}
