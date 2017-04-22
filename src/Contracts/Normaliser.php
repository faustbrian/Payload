<?php



declare(strict_types=1);



namespace BrianFaust\Payload\Contracts;

use BrianFaust\Payload\Readers\Reader;
use BrianFaust\Payload\Writers\Writer;

interface Normaliser
{
    public function serialiser(): Serialiser;

    public function unserialiser(): Unserialiser;

    public function writer(): Writer;

    public function reader(): Reader;
}
