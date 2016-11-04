<?php

namespace BrianFaust\Payload\Contracts;

interface Unserialiser
{
    public function unserialise($input, $class = null);
}
