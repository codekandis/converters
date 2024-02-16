<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any bi-directional converter converting between `string` and `integer`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface StringToIntBiDirectionalConverterInterface extends BiDirectionalConverterInterface
{
	/**
	 * Converts from a `string` into an `integer` value.
	 * @param string $value The `string` value which has to be converted.
	 * @return int The converted `integer` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convertTo( mixed $value ): int;

	/**
	 * Converts from an `integer` into a `string` value.
	 * @param int $value The `integer` value which has to be converted.
	 * @return string The converted `string` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertFrom( mixed $value ): string;
}
