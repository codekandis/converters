<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting a `nullable integer` into a `nullable integer string`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableIntegerToNullableIntegerStringUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts from a `nullable integer` into a `nullable integer string` value.
	 * @param ?int $value The `nullable integer` value which has to be converted.
	 * @return ?string The converted `nullable integer string` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( mixed $value ): ?string;
}
