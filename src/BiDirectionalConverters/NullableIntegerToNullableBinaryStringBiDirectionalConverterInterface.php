<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any bidirectional converter converting between `nullable integer` and `nullable binary string`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableIntegerToNullableBinaryStringBiDirectionalConverterInterface extends BiDirectionalConverterInterface
{
	/**
	 * Converts from an `nullable integer` into a `nullable binary string` value.
	 * @param ?int $value The `nullable integer` value which has to be converted.
	 * @return ?string The converted `nullable binary string` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertTo( mixed $value ): ?string;

	/**
	 * Converts from a `nullable binary string` into an `nullable integer` value.
	 * @param ?string $value The `nullable binary string` value which has to be converted.
	 * @return ?int The converted `nullable integer` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convertFrom( mixed $value ): ?int;
}
