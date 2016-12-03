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

namespace BrianFaust\Payload\Utils;

class IniBuilder
{
    public function build(array $data, $depth = 0, $prevKey = null)
    {
        $valueOutput = null;
        $arrayOutput = null;

        $position = 0;
        foreach ($data as $key => $val) {
            if (is_array($val)) {
                if ($depth == 0) {
                    $arrayOutput .= "\n[{$key}]\n";
                }

                $arrayOutput .= $this->build($val, $depth + 1, $key);
            } else {
                $valStr = $this->escape($val);

                if ($depth > 1) {
                    if ($key !== $position) {
                        if (ctype_digit((string) $key)) {
                            $position = $key;
                        }

                        $valueOutput .= "{$prevKey}[{$key}] = {$valStr}\n";
                    } else {
                        $valueOutput .= "{$prevKey}[] = {$valStr}\n";
                    }

                    ++$position;
                } else {
                    $valueOutput .= "{$key} = {$valStr}\n";
                }
            }
        }

        $output = "{$valueOutput}\n{$arrayOutput}";

        return $depth ? ltrim($output) : trim($output);
    }

    public function escape($value)
    {
        $value = (string) $value;

        if (empty($value)) {
            return 'false';
        } elseif ($value == '1') {
            return 'true';
        }

        if (is_numeric($value)) {
            return (string) $value;
        }

        if (is_string($value) && ctype_alnum($value) && !is_numeric($value)) {
            return (string) $value;
        }

        return var_export($value, true);
    }
}
