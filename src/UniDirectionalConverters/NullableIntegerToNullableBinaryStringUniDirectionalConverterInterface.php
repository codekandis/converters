<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting an `nullable integer` into a `nullable binary string`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableIntegerToNullableBinaryStringUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts from an `nullable integer` into a `nullable binary string` value.
	 * @param ?int $value The `nullable integer` value which has to be converted.
	 * @return ?string The converted `nullable binary string` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( mixed $value ): ?string;
}
