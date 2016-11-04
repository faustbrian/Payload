<?php

namespace BrianFaust\Payload\Serialisers;

use BrianFaust\Payload\Contracts\Serialiser;
use BrianFaust\Csv\Writer;

class CsvSerialiser implements Serialiser
{
    public function serialise($input)
    {
        $writer = Writer::createFromString('');

        if (is_array(reset($input))) {
            $writer->insertOne(array_keys(reset($input)));
        } else {
            $writer->insertOne(array_keys($input));
        }

        if (is_array(reset($input))) {
            $writer->insertAll($input);
        } else {
            $writer->insertOne($input);
        }

        return $writer->__toString();
    }
}
