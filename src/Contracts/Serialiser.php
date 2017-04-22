<?php



declare(strict_types=1);



namespace BrianFaust\Payload\Contracts;

interface Serialiser
{
    public function serialise($input): string;
}
