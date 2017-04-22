<?php



declare(strict_types=1);



namespace BrianFaust\Payload\Readers;

use BrianFaust\Payload\Unserialisers\XmlUnserialiser;

class XmlReader extends Reader
{
    protected $extensions = ['xml'];

    public function read($path, ? string $class) : array
    {
        return (new XmlUnserialiser())->unserialise($this->contents($path), $class);
    }
}
