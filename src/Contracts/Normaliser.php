<?php

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
