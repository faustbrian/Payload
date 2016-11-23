<?php

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use BrianFaust\Payload\Arr;
use BrianFaust\Payload\Csv;
use BrianFaust\Payload\Ini;
use BrianFaust\Payload\Json;
use BrianFaust\Payload\Value;
use BrianFaust\Payload\Xml;
use BrianFaust\Payload\Yaml;
use BrianFaust\Payload\YamlInline;

if (! function_exists('array_serialise')) {
    function array_serialise($input)
    {
        return (new Arr())->serialise($input);
    }
}

if (! function_exists('array_unserialise')) {
    function array_unserialise($contents, $class = null)
    {
        return (new Arr())->unserialise($contents, $class);
    }
}

if (! function_exists('array_read')) {
    function array_read($path, $class = null)
    {
        return (new Arr())->read($path, $class);
    }
}

if (! function_exists('array_write')) {
    function array_write($path, $input)
    {
        return (new Arr())->write($path, $input);
    }
}

if (! function_exists('csv_serialise')) {
    function csv_serialise($input)
    {
        return (new Csv())->serialise($input);
    }
}

if (! function_exists('csv_unserialise')) {
    function csv_unserialise($contents, $class = null)
    {
        return (new Csv())->unserialise($contents, $class);
    }
}

if (! function_exists('csv_read')) {
    function csv_read($path, $class = null)
    {
        return (new Csv())->read($path, $class);
    }
}

if (! function_exists('csv_write')) {
    function csv_write($path, $input)
    {
        return (new Csv())->write($path, $input);
    }
}

if (! function_exists('ini_serialise')) {
    function ini_serialise($input)
    {
        return (new Ini())->serialise($input);
    }
}

if (! function_exists('ini_unserialise')) {
    function ini_unserialise($contents, $class = null)
    {
        return (new Ini())->unserialise($contents, $class);
    }
}

if (! function_exists('ini_read')) {
    function ini_read($path, $class = null)
    {
        return (new Ini())->read($path, $class);
    }
}

if (! function_exists('ini_write')) {
    function ini_write($path, $input)
    {
        return (new Ini())->write($path, $input);
    }
}

if (! function_exists('json_serialise')) {
    function json_serialise($input)
    {
        return (new Json())->serialise($input);
    }
}

if (! function_exists('json_unserialise')) {
    function json_unserialise($contents, $class = null)
    {
        return (new Json())->unserialise($contents, $class);
    }
}

if (! function_exists('json_read')) {
    function json_read($path, $class = null)
    {
        return (new Json())->read($path, $class);
    }
}

if (! function_exists('json_write')) {
    function json_write($path, $input)
    {
        return (new Json())->write($path, $input);
    }
}

if (! function_exists('value_serialise')) {
    function value_serialise($input)
    {
        return (new Value())->serialise($input);
    }
}

if (! function_exists('value_unserialise')) {
    function value_unserialise($contents, $class = null)
    {
        return (new Value())->unserialise($contents, $class);
    }
}

if (! function_exists('value_read')) {
    function value_read($path, $class = null)
    {
        return (new Value())->read($path, $class);
    }
}

if (! function_exists('value_write')) {
    function value_write($path, $input)
    {
        return (new Value())->write($path, $input);
    }
}

if (! function_exists('xml_serialise')) {
    function xml_serialise($input)
    {
        return (new Xml())->serialise($input);
    }
}

if (! function_exists('xml_unserialise')) {
    function xml_unserialise($contents, $class = null)
    {
        return (new Xml())->unserialise($contents, $class);
    }
}

if (! function_exists('xml_read')) {
    function xml_read($path, $class = null)
    {
        return (new Xml())->read($path, $class);
    }
}

if (! function_exists('xml_write')) {
    function xml_write($path, $input)
    {
        return (new Xml())->write($path, $input);
    }
}

if (! function_exists('yaml_serialise')) {
    function yaml_serialise($input)
    {
        return (new Yaml())->serialise($input);
    }
}

if (! function_exists('yaml_unserialise')) {
    function yaml_unserialise($contents, $class = null)
    {
        return (new Yaml())->unserialise($contents, $class);
    }
}

if (! function_exists('yaml_read')) {
    function yaml_read($path, $class = null)
    {
        return (new Yaml())->read($path, $class);
    }
}

if (! function_exists('yaml_write')) {
    function yaml_write($path, $input)
    {
        return (new Yaml())->write($path, $input);
    }
}

if (! function_exists('yaml_inline_serialise')) {
    function yaml_inline_serialise($input)
    {
        return (new YamlInline())->serialise($input);
    }
}

if (! function_exists('yaml_inline_unserialise')) {
    function yaml_inline_unserialise($contents, $class = null)
    {
        return (new YamlInline())->unserialise($contents, $class);
    }
}

if (! function_exists('yaml_inline_read')) {
    function yaml_inline_read($path, $class = null)
    {
        return (new YamlInline())->read($path, $class);
    }
}

if (! function_exists('yaml_inline_write')) {
    function yaml_inline_write($path, $input)
    {
        return (new YamlInline())->write($path, $input);
    }
}
