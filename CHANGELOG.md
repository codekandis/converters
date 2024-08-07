# Changelog

All notable changes to this project will be documented in this file.

The format is based on [keep a changelog 1.1.0][xtlink-keep-a-changelog]
and this project adheres to [Semantic Versioning 2.0.0][xtlink-semantic-versioning].

## [1.0.0] - 2024-08-01

### Fixed

* type hints
* method naming
* PHPDoc

### Changed

* composer package
  * changed
    * description
    * keywords
    * require
      * `php` [>=8.3]
      * `codekandis/types` [^1.0.0]
    * require-dev
      * `codekandis/phpunit` [^5.0.0]
  * added
    * version
    * require
      * `ext-json` [*]
    * require-dev
      * `codekandis/json-codec` [^3.0.0]
      * `rector/rector` [^1.2.2]
    * autoload-dev
      * psr-4
        * `CodeKandis\Converters\Build\`
          * `build/`
    * scripts
      * `test`
* PHPUnit tests
  * configuration
  * externalized data providers
* exception handling
* `CODE_OF_CONDUCT.md`
* `README.md`
  * PHP version `8.3`
  * documentation

### Added

* type hints
* `Override` attributes
* rector
  * configuration script
  * shell script
* documentation
* `.gitattributes` to ignore dev-assets

[1.0.0]: https://github.com/codekandis/converters/compare/0.4.0...1.0.0

---
## [0.4.0] - 2022-04-29

### Added

* int to binary string and vice versa uni- and bi-directional converters
* bool array to binary string and vice versa uni- and bi-directional converters

### Fixed

* PHPDoc

[0.4.0]: https://github.com/codekandis/converters/compare/0.3.0...0.4.0

---
## [0.3.0] - 2021-11-28

### Added

* additional uni-directional converters 

[0.3.0]: https://github.com/codekandis/converters/compare/0.2.0...0.3.0

---
## [0.2.0] - 2021-11-05

### Added

* value types and regular expressions of values
* enhanced type and value validation in the converters 

[0.2.0]: https://github.com/codekandis/converters/compare/0.1.0...0.2.0

---
## [0.1.0] - 2021-10-17

### Added

* type determinators
* converter interfaces and base classes
* several default converters
* `CODE_OF_CONDUCT.md`
* `LICENSE`
* `README.md`
* `CHANGELOG.md`

[0.1.0]: https://github.com/codekandis/converters/tree/0.1.0



[xtlink-keep-a-changelog]: http://keepachangelog.com/en/1.1.0/
[xtlink-semantic-versioning]: http://semver.org/spec/v2.0.0.html
