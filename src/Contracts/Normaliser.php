<?php

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Payload\Contracts;

interface Normaliser
{
    public function serialiser();

    public function unserialiser();

    public function writer();

    public function reader();
}
