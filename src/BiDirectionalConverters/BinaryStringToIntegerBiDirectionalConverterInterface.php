<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any bidirectional converter converting a binary string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BINARY_STRING`] into its corresponding integer value - and vice versa.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface BinaryStringToIntegerBiDirectionalConverterInterface extends BiDirectionalConverterInterface
{
	/**
	 * Converts from a binary string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BINARY_STRING`] into its corresponding integer value.
	 * @param string $value The binary string value which has to be converted.
	 * @return int The converted integer value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convertTo( mixed $value ): int;

	/**
	 * Converts from a integer value into its corresponding binary string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BINARY_STRING`].
	 * @param int $value The integer value which has to be converted.
	 * @return string The converted binary string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertFrom( mixed $value ): string;
}
