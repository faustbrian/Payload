<?php



declare(strict_types=1);



namespace BrianFaust\Payload\Utils;

class Mapper
{
    public function map($input, $class)
    {
        if (is_array($input)) {
            $input = $this->arrayToObject($input);
        }

        return (new \JsonMapper())->map($input, new $class());
    }

    private function arrayToObject($input)
    {
        return json_decode(json_encode($input));
    }
}
