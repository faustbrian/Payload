<?php



declare(strict_types=1);



namespace BrianFaust\Payload\Serialisers;

use BrianFaust\Csv\Writer;
use BrianFaust\Payload\Contracts\Serialiser;

class CsvSerialiser implements Serialiser
{
    public function serialise($input): string
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
