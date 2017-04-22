<?php



declare(strict_types=1);



namespace BrianFaust\Payload;

use BrianFaust\Payload\Normalisers\XmlNormaliser;

class Xml
{
    protected $normaliser;

    public function __construct()
    {
        $this->normaliser = new XmlNormaliser();
    }

    public function serialise($input): string
    {
        return $this->normaliser->serialiser()->serialise($input);
    }

    public function unserialise($input, ?string $class): array
    {
        return $this->normaliser->unserialiser()->unserialise($input, $class);
    }

    public function write($path, $input): bool
    {
        return $this->normaliser->writer()->write($path, $input);
    }

    public function read($path, ?string $class): array
    {
        return $this->normaliser->reader()->read($path, $class);
    }
}
