<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any bidirectional converter converting a nullable boolean value equal to `false` or `true` into its corresponding nullable boolean integer string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BOOLEAN_INTEGER_STRING`] - and vice versa.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverterInterface extends BiDirectionalConverterInterface
{
	/**
	 * Converts from a nullable boolean value equal to `false` or `true` into its corresponding nullable boolean integer string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BOOLEAN_INTEGER_STRING`].
	 * @param ?bool $value The nullable boolean value which has to be converted.
	 * @return ?string The converted nullable boolean integer string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertTo( mixed $value ): ?string;

	/**
	 * Converts from a nullable boolean integer string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BOOLEAN_INTEGER_STRING`] into its corresponding nullable boolean value equal to `false` or `true`.
	 * @param ?string $value The nullable boolean integer string value which has to be converted.
	 * @return ?bool The converted nullable boolean value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convertFrom( mixed $value ): ?bool;
}
