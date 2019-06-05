# Payload

[![Build Status](https://img.shields.io/travis/faustbrian/Payload/master.svg?style=flat-square)](https://travis-ci.org/faustbrian/Payload)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/faustbrian/payload.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/faustbrian/Payload.svg?style=flat-square)](https://github.com/faustbrian/Payload/releases)
[![License](https://img.shields.io/packagist/l/faustbrian/Payload.svg?style=flat-square)](https://packagist.org/packages/faustbrian/Payload)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/payload
```

## Usage

##### Serialise an input

``` php
(new Arr())->serialise($input);
(new Csv())->serialise($input);
(new Ini())->serialise($input);
(new Json())->serialise($input);
(new Value())->serialise($input);
(new Xml())->serialise($input);
(new Yaml())->serialise($input);
(new YamlInline())->serialise($input);
```

##### Unserialise an input

``` php
(new Arr())->unserialise($contents, $class);
(new Csv())->unserialise($contents, $class);
(new Ini())->unserialise($contents, $class);
(new Json())->unserialise($contents, $class);
(new Value())->unserialise($contents, $class);
(new Xml())->unserialise($contents, $class);
(new Yaml())->unserialise($contents, $class);
```

##### Read a file and unserialise its contents

``` php
(new Arr())->read($path, $class);
(new Csv())->read($path, $class);
(new Ini())->read($path, $class);
(new Json())->read($path, $class);
(new Value())->read($path, $class);
(new Xml())->read($path, $class);
(new Yaml())->read($path, $class);
```

##### Serialise an input and write it into a file

``` php
(new Arr())->write($path, $input);
(new Csv())->write($path, $input);
(new Ini())->write($path, $input);
(new Json())->write($path, $input);
(new Value())->write($path, $input);
(new Xml())->write($path, $input);
(new Yaml())->write($path, $input);
(new YamlInline())->write($path, $input);
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://basecode.sh)
