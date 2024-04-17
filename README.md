# codekandis/converters

[![Version][xtlink-version-badge]][srclink-changelog]
[![License][xtlink-license-badge]][srclink-license]
[![Minimum PHP Version][xtlink-php-version-badge]][xtlink-php-net]
![Code Coverage][xtlink-code-coverage-badge]

`codekandis/converters` is a library providing converter interfaces and classes.

## Index

* [Installation](#installation)
* [How to use](#how-to-use)
* [List of converters](#list-of-converters)

## Installation

Install the latest version with

```bash
$ composer require codekandis/converters
```

## How to use

### Unidirectional converters

```php
$value = false;

( new IntegerToBinaryStringUniDirectionalConverter() )
    ->convert( $value );
/**
 * 0
 */

$value = 0;

( new BinaryStringToIntegerUniDirectionalConverter() )
    ->convert( $value );
/**
 * false
 */
```

### Bidirectional converters

```php
$value = 42;

( new IntegerToBinaryStringBiDirectionalConverter() )
    ->convertTo( $value );
/**
 * '101010'
 */

$value = '101010';

( new IntegerToBinaryStringBiDirectionalConverter() )
    ->convertFrom( $value );
/**
 * 42
 */
```

## List of converters

[See the documentation][doclink] for further information about all available base and concreate converters.



[xtlink-version-badge]: https://img.shields.io/badge/version-development-blue.svg
[xtlink-license-badge]: https://img.shields.io/badge/license-MIT-yellow.svg
[xtlink-php-version-badge]: https://img.shields.io/badge/php-%3E%3D%208.3-8892BF.svg
[xtlink-code-coverage-badge]: https://img.shields.io/badge/coverage-100%25-green.svg
[xtlink-php-net]: https://php.net

[srclink-changelog]: ./CHANGELOG.md
[srclink-license]: ./LICENSE

[doclink]: ./docs/README.md
