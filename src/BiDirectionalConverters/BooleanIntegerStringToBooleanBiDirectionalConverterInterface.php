<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any bidirectional converter converting a boolean integer string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BOOLEAN_INTEGER_STRING`] into its corresponding boolean value equal to `false` or `true` - and vice versa.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface BooleanIntegerStringToBooleanBiDirectionalConverterInterface extends BiDirectionalConverterInterface
{
	/**
	 * Converts from a boolean integer string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BOOLEAN_INTEGER_STRING`] into its corresponding boolean value equal to `false` or `true`.
	 * @param string $value The boolean integer string value which has to be converted.
	 * @return bool The converted boolean value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convertTo( mixed $value ): bool;

	/**
	 * Converts from a boolean value equal to `false` or `true` into its corresponding boolean integer string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BOOLEAN_INTEGER_STRING`].
	 * @param bool $value The boolean value which has to be converted.
	 * @return string The converted boolean integer string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertFrom( mixed $value ): string;
}
