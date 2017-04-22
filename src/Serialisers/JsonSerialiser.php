<?php



declare(strict_types=1);



namespace BrianFaust\Payload\Serialisers;

use BrianFaust\Payload\Contracts\Serialiser;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer as SymfonySerialiser;

class JsonSerialiser implements Serialiser
{
    public function serialise($input): string
    {
        return (new SymfonySerialiser(
            [new ObjectNormalizer()], [new JsonEncoder()]
        ))->serialize($input, 'json');
    }
}
