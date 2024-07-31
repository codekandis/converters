<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting a boolean array containing values equal to `false` or `true` into its corresponding binary string value matching the regular expression `ValidValuesRegularExpressions::REGEX_BINARY_STRING`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface BooleanArrayToBinaryStringUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts from a boolean array containing values equal to `false` or `true` into its corresponding binary string value matching the regular expression `ValidValuesRegularExpressions::REGEX_BINARY_STRING`.
	 * @param bool[] $value The boolean array value which has to be converted.
	 * @return string The converted binary string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( mixed $value ): string;
}
