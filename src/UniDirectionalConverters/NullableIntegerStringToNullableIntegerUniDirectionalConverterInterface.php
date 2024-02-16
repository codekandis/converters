<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting a `nullable integer string` into a `nullable integer`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableIntegerStringToNullableIntegerUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts from a `nullable integer string` into a `nullable integer` value.
	 * @param ?string $value The `nullable integer string` value which has to be converted.
	 * @return ?int The converted `nullable integer` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convert( mixed $value ): ?int;
}
