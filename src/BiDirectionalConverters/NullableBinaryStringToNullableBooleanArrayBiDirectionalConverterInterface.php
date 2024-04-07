<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any bidirectional converter converting between `nullable binary string` and `nullable boolean array`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableBinaryStringToNullableBooleanArrayBiDirectionalConverterInterface extends BiDirectionalConverterInterface
{
	/**
	 * Converts from a `nullable binary string` into a `nullable boolean array` value.
	 * @param ?string $value The `nullable binary string` value which has to be converted.
	 * @return ?bool[] The converted `nullable boolean array` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convertTo( mixed $value ): ?array;

	/**
	 * Converts from a `nullable boolean array` into a `nullable binary string` value.
	 * @param ?bool[] $value The `nullable boolean array` value which has to be converted.
	 * @return ?string The converted `nullable binary string` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertFrom( mixed $value ): ?string;
}
