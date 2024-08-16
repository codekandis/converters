<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any bidirectional converter converting a nullable boolean string value matching the regular expression {@link ValidValues::REGEX_BOOLEAN_STRING} into its corresponding nullable boolean value equal to `false` or `true` - and vice versa.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableBooleanStringToNullableBooleanBiDirectionalConverterInterface extends BiDirectionalConverterInterface
{
	/**
	 * Converts from a nullable boolean string value matching the regular expression {@link ValidValues::REGEX_BOOLEAN_STRING} into its corresponding nullable boolean value equal to `false` or `true`.
	 * @param ?string $value The nullable boolean string value which has to be converted.
	 * @return ?bool The converted nullable boolean value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convertTo( mixed $value ): ?bool;

	/**
	 * Converts from a nullable boolean value equal to `false` or `true` into its corresponding nullable boolean string value matching the regular expression {@link ValidValues::REGEX_BOOLEAN_STRING}.
	 * @param ?bool $value The nullable boolean value which has to be converted.
	 * @return ?string The converted nullable boolean string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertFrom( mixed $value ): ?string;
}
