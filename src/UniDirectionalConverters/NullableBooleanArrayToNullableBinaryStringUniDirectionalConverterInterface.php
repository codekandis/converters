<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting a `nullable boolean array` into a `nullable binary string`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableBooleanArrayToNullableBinaryStringUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts from a `nullable boolean array` into a `nullable binary string` value.
	 * @param ?bool[] $value The `nullable boolean array` value which has to be converted.
	 * @return ?string The converted `nullable binary string` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( mixed $value ): ?string;
}
