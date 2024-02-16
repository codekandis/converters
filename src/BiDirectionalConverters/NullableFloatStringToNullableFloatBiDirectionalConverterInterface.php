<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any bidirectional converter converting between `nullable float string` and `nullable float`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableFloatStringToNullableFloatBiDirectionalConverterInterface extends BiDirectionalConverterInterface
{
	/**
	 * Converts from a `nullable float string` into a `nullable float` value.
	 * @param ?string $value The `nullable float string` value which has to be converted.
	 * @return ?float The converted `nullable float` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convertTo( mixed $value ): ?float;

	/**
	 * Converts from a `nullable float` into a `nullable float string` value.
	 * @param ?float $value The `nullable float` value which has to be converted.
	 * @return ?string The converted `nullable float string` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertFrom( mixed $value ): ?string;
}
