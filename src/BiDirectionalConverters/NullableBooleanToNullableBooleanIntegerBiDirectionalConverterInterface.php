<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any bidirectional converter converting a nullable boolean value equal to `false` or `true` into its corresponding nullable boolean integer value equal to `0` or `1` - and vice versa.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableBooleanToNullableBooleanIntegerBiDirectionalConverterInterface extends BiDirectionalConverterInterface
{
	/**
	 * Converts from a nullable boolean value equal to `false` or `true` into its corresponding nullable boolean integer value equal to `0` or `1`.
	 * @param ?bool $value The nullable boolean value which has to be converted.
	 * @return ?int The converted nullable boolean integer value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertTo( mixed $value ): ?int;

	/**
	 * Converts from a nullable boolean integer value equal to `0` or `1` into its corresponding nullable boolean value equal to `false` or `true`.
	 * @param ?int $value The nullable boolean integer value which has to be converted.
	 * @return ?bool The converted nullable boolean value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convertFrom( mixed $value ): ?bool;
}
