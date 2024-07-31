<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting a nullable binary string value matching the regular expression `ValidValuesRegularExpressions::REGEX_BINARY_STRING` into its corresponding nullable boolean array containing values equal to `false` or `true`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableBinaryStringToNullableBooleanArrayUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts from a nullable binary string value matching the regular expression `ValidValuesRegularExpressions::REGEX_BINARY_STRING` into its corresponding nullable boolean array containing values equal to `false` or `true`.
	 * @param ?string $value The nullable binary string value which has to be converted.
	 * @return ?bool[] The converted nullable boolean array value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convert( mixed $value ): ?array;
}
