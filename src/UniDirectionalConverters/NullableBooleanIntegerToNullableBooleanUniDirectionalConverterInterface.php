<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting a nullable boolean integer value equal to `0` or `1` into its corresponding nullable boolean value equal to `false` or `true`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableBooleanIntegerToNullableBooleanUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts from a nullable boolean integer value equal to `0` or `1` into its corresponding nullable boolean value equal to `false` or `true`.
	 * @param ?int $value The nullable boolean integer value which has to be converted.
	 * @return ?bool The converted nullable boolean value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convert( mixed $value ): ?bool;
}
