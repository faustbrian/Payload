<?php



declare(strict_types=1);



namespace BrianFaust\Payload\Serialisers;

use BrianFaust\Payload\Contracts\Serialiser;
use BrianFaust\Payload\Utils\IniBuilder;

class IniSerialiser implements Serialiser
{
    public function serialise($input): string
    {
        return (new IniBuilder())->build($input);
    }
}
