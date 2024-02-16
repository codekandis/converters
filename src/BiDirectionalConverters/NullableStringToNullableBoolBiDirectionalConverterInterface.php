<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any bidirectional converter converting between `nullable string` and `nullable boolean`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableStringToNullableBoolBiDirectionalConverterInterface extends BiDirectionalConverterInterface
{
	/**
	 * Converts from a `nullable string` into a `nullable boolean` value.
	 * @param ?string $value The `nullable string` value which has to be converted.
	 * @return ?bool The converted `nullable boolean` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convertTo( mixed $value ): ?bool;

	/**
	 * Converts from a `nullable boolean` into a `nullable string` value.
	 * @param ?bool $value The `nullable boolean` value which has to be converted.
	 * @return ?string The converted `nullable string` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertFrom( mixed $value ): ?string;
}
