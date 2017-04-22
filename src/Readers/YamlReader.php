<?php



declare(strict_types=1);



namespace BrianFaust\Payload\Readers;

use BrianFaust\Payload\Unserialisers\YamlUnserialiser;

class YamlReader extends Reader
{
    protected $extensions = ['yaml', 'yml'];

    public function read($path, ? string $class) : array
    {
        return (new YamlUnserialiser())->unserialise($this->contents($path), $class);
    }
}
