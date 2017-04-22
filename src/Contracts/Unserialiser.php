<?php



declare(strict_types=1);



namespace BrianFaust\Payload\Contracts;

interface Unserialiser
{
    public function unserialise($input, ? string $class) : array;
}
